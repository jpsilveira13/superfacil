<?php
CLASS ISC_PRODUCTDESCRIPTION_PANEL extends PANEL
{	/***variables used for the addon custom product package****/
	public $_prodvariationoptions = array();
	public $_prodvariationvalues = array();
	public $_prodvariationcombinations = array();
	public $_prodvariationid = '';
	public $_prodid = '';
	public $_variations = '';
	public $_qtydropdown = '';
	public $_imgthumb = '';
	public $_imgzoomer = '';
	public $_imgtiny = '';
	public $_currentprodthumbimage = '';
	public $_prodthumbwidth = '';
	public $_prodthumbheight = '';
	public $_prodmaxzoomwidth = '';
	public $_prodmaxzoomheight = '';
	public $_prodmaxtinywidth = '';
	public $_prodmaxtinyheight = '';
	public $_prodimagejavascript = '';
	private $productclass = null;
	private $cartClass= null;
	/*********/
	public function SetPanelSettings()
	{
		$GLOBALS['ProductDesc'] = $GLOBALS['ISC_CLASS_PRODUCT']->GetDesc();
		if(!trim($GLOBALS['ProductDesc'])) {
			$GLOBALS['HidePanels'][] = 'ProductDescription';
		}
		//enabled only if custom product package addon is enabled
		$pull_customprodpackage = $GLOBALS['ISC_CLASS_DB']->Query("
			SELECT COUNT(*) FROM [|PREFIX|]module_vars WHERE modulename='addon_customprodpackage' AND variablename='is_enable' AND variableval='1' 
		");
		$pull_count = $GLOBALS['ISC_CLASS_DB']->FetchOne($pull_customprodpackage);
		if($pull_count != 0 ){
			$this->showPackage();
		}
		//end for custom product package addon code
	}

	function showPackage(){


		#$GLOBALS['test'] = GetClass('ISC_PRODUCTDETAILS_PANEL');
		$this->productClass = GetClass('ISC_PRODUCT');//call class and methods from class.product.php
		$this->cartClass = GetClass('ISC_CART');//call class and method from class.cart.php
		//$this->prodDetailsClass = GetClass('ISC_PRODUCTDETAILS_PANEL');
		$GLOBALS['mainProductId'] = $this->productClass->GetProductId();
		$prodId = $this->productClass->GetProductId();
		$query = $GLOBALS['ISC_CLASS_DB']->Query("
				select count(*) from [|PREFIX|]custom_prod_package where main_prod_id = '".$prodId."'
		");
		$count = $GLOBALS['ISC_CLASS_DB']->FetchOne($query);
		if($count != 0){
			$query = $GLOBALS['ISC_CLASS_DB']->Query("
				select * from [|PREFIX|]custom_prod_package where main_prod_id = '".$prodId."'
			");
			$row = $GLOBALS['ISC_CLASS_DB']->Fetch($query);
			$GLOBALS['start_table'] = '<table id="packagesTable" class="packagesTable">';
			$GLOBALS['end_table'] = '</table>';
			$GLOBALS['headers'] = '<th><input type="checkbox" name="toggleAll"/></th>
								   <th>Quantity</th>
								   <th>Name</th>
								   <th>Options</th>
								   <th>Description</th>
								   <th>Price</th>
							       <th style="display:none;"></th>
						     	   <th style="display:none;"></th>';
			$GLOBALS['packagebanner'] = 'Product Package: ' . $row['package_name'] . ' </br><font size="1">(<em>Main product is automatically included in this package</em>)</font>';
			$GLOBALS['packageseparator'] = '<hr style="%%GLOBAL_HideSectionSeparator%%" class="ProductSectionSeparator" />';
			$GLOBALS['btnCart'] = '<input type="image" id="btnCart" src="%%GLOBAL_IMG_PATH%%/%%GLOBAL_SiteColor%%/AddCartButton.gif" alt="" align="right" id="subProdsbtnCart"/><br/><br/>';
			$GLOBALS['CustomPack_CartLink'] =  sprintf("%s/custompackcart.php?action=add", $GLOBALS['ShopPathNormal']);
			$GLOBALS['SNIPPETS']['PackageDisplay'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('packagedisplay_customprodpackage');
			$query = $GLOBALS['ISC_CLASS_DB']->Query("
				select * from [|PREFIX|]custom_prod_package where main_prod_id = '".$prodId."'
			");
			$row = $GLOBALS['ISC_CLASS_DB']->Fetch($query);
			$sub_prods_ids = explode(',',$row['sub_prods_ids']);
			$output = '';
			$outputdesc = '';
			$count = 0;
			foreach($sub_prods_ids as $k => $v){
				$count++;
				$query = $GLOBALS['ISC_CLASS_DB']->Query("
						select a.*,b.*,c.* from [|PREFIX|]products a 
						inner join [|PREFIX|]product_images b
						on a.productid = b.imageprodid
						inner join [|PREFIX|]brands c on a.prodbrandid = c.brandid
						where a.productid = '".$v."' and b.imageisthumb = '1'
				");
				$row = $GLOBALS['ISC_CLASS_DB']->Fetch($query);
				$this->setProductsGlobals($row);
				$GLOBALS['count'] = $count;
				$GLOBALS['script'] = '';
				//check for variations
				#$this->SetProductVariations($v);
				$this->SetupProductVariations($v);
				$this->SetProductVariations();
				$this->SetProductImages($v);
				$GLOBALS['qtydropdown'] = $this->_qtydropdown;
				$GLOBALS['variations'] = $this->_variations;
				$GLOBALS['ProductThumbImage'] = $this->_imgthumb;
				$GLOBALS['ProductImageZoomer'] = $this->_imgzoomer;
				$GLOBALS['ProductTinyImages'] = $this->_imgtiny;
				$GLOBALS['CustomPack_CurrentProdThumbImage'] = $this->_currentprodthumbimage;
				$GLOBALS['CustomPack_ProductThumbWidth'] = $this->_prodthumbwidth;
				$GLOBALS['CustomPack_ProductThumbHeight']  = $this->_prodthumbheight;
				$GLOBALS['CustomPack_ProductMaxZoomWidth'] = $this->_prodmaxzoomwidth;
				$GLOBALS['CustomPack_ProductMaxZoomHeight'] = $this->_prodmaxzoomheight;
				$GLOBALS['CustomPack_ProductMaxTinyWidth'] = $this->_prodmaxtinywidth;
				$GLOBALS['CustomPack_ProductMaxTinyHeight'] = $this->_prodmaxtinyheight;
				$GLOBALS['CustomPack_ProdImageJavascript'] = $this->_prodimagejavascript;
				#	var_dump($this->_prodvariationoptions);echo '<br/>';
				//
				$output .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('productdetails_customprodpackage');
			}
			//$GLOBALS['CustomPack_CartLink'] = sprintf("%s/cart.php?action=add&amp;product_id=%d", $GLOBALS['ShopPathNormal'], $prodid);
			$GLOBALS['SNIPPETS']['package'] = $output;	
			}
	}
	private function SetProductVariations(){
		$GLOBALS['PackageSubProd_VariationList'] = '';
		$GLOBALS['SNIPPETS']['PackageSubProd_VariationList'] = '';
		$GLOBALS['PackageSubProd_HideVariationList'] = '';
		$GLOBALS['PackageSubProd_ProductOptionRequired'] = "false";
		
		//Are there any product variations?
		$variationOptions = $this->GetProductVariationOptions();
		#var_dump($variationOptions);echo '<br/>';
		if(empty($variationOptions)){
			$GLOBALS['PackageSubProd_HideVariationList'];
		}

		$variationValues = $this->GetProductVariationOptionValues();
		//Is a product option required when adding  the product to the cart?
		if($this->IsOptionRequired()){
			$GLOBALS['PackageSubProd_ProductOptionRequired'] = "true";
		}

		if(count($variationOptions) == 1){
			$onlyOneVariation = true;
			$GLOBALS['PackageSubProd_OptionMessage'] = GetLang('ChooseAnOption');
		}else{
			$GLOBALS['PackageSubProd_OptionMessage'] = GetLang('ChooseOneOrMoreOptions');
			$onlyOneVariation = false;
		}
		$useSelect = false;
		$GLOBALS['PackageSubProd_VariationNumber'] = 0;
		//////////////////////////////////////////////////////////////////////////continue here
		foreach($variationOptions as $optionName){
			// If this is the only variation then instead of select boxes, just show radio buttons
			$GLOBALS['PackageSubProd_VariationChooseText'] = "";
			$GLOBALS['PackageSubProd_VariationNumber']++;
			$GLOBALS['PackageSubProd_VariationName'] = isc_html_escape($optionName);
			$GLOBALS['SNIPPETS']['PackageSubProd_OptionList'] = '';

			// Fixes cases where for one reason or another there are no options for a specific variation
			// Botched import?
			/***change snippet templates later***/
			if(empty($variationValues[$optionName])) {
				continue;
			}
			if($onlyOneVariation && count($variationValues[$optionName]) <= 5 && !$this->IsOptionRequired()) {
				$GLOBALS['PackageSubProd_OptionId'] = 0;
				$GLOBALS['PackageSubProd_OptionValue'] = GetLang('zNone');
				$GLOBALS['PackageSubProd_OptionChecked'] = "checked=\"checked\"";
				$GLOBALS['SNIPPETS']['PackageSubProd_OptionList'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("PackageSubProd_ProductVariationListSingleItem");
			}
			else if($onlyOneVariation && count($variationValues[$optionName]) > 5) {
				$useSelect = true;
			}

			// Build the list of options
			$GLOBALS['PackageSubProd_OptionChecked'] = '';
			if (isset($variationValues[$optionName])) {
				foreach($variationValues[$optionName] as $optionid => $value) {
					$GLOBALS['PackageSubProd_OptionId'] = (int)$optionid;
					$GLOBALS['PackageSubProd_OptionValue'] = isc_html_escape($value);
					if($onlyOneVariation && !$useSelect) {
						$GLOBALS['SNIPPETS']['PackageSubProd_OptionList'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("PackageSubProd_ProductVariationListSingleItem");
					}
					else {
						$GLOBALS['SNIPPETS']['PackageSubProd_OptionList'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("PackageSubProd_ProductVariationListMultipleItem");
					}
				}
			}
			if($onlyOneVariation == true && !$useSelect) {
				$output = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("PackageSubProd_ProductVariationListSingle");
			}
			else {
				$GLOBALS['PackageSubProd_VariationChooseText'] = GetLang('ChooseA')." ".isc_html_escape($optionName);
				$output = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("PackageSubProd_ProductVariationListMultiple");
			}
			$output = $GLOBALS['ISC_CLASS_TEMPLATE']->ParseSnippets($output, $GLOBALS['SNIPPETS']);
			$GLOBALS['SNIPPETS']['PackageSubProd_VariationList'] .= $output;
		}
		$this->_variations = $GLOBALS['SNIPPETS']['PackageSubProd_VariationList'];
	}
	function SetUpProductVariations($productid){
		$this->_prodid = $productid;
		$this->productClass->_SetProductData($productid);
		$getProdData = $this->productClass->prodData;
		$prodData = array(
			'prodvariationid' 		=> $getProdData['prodvariationid'],
			'prodoptionsrequired'	=> $getProdData['prodoptionsrequired']
		);
		$this->_prodvariationid = $prodData['prodvariationid'];
		$this->_prodoptionsrequired = $prodData['prodoptionsrequired'];
		//get a list of option names
		$query = "select distinct voname from [|PREFIX|]product_variation_options 
				 where vovariationid = ".$this->_prodvariationid."  order by vooptionsort ";
		$res = $GLOBALS['ISC_CLASS_DB']->Query($query);
		$vOptions = array();
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($res)){
			$vOptions[] = $row['voname'];
		}
		$this->_prodvariationoptions = $vOptions;

		// get a list of enabled option values to limit what's shown in the select boxes (for the first option or if javascript is disabled)
		$query = "select * from [|PREFIX|]product_variation_combinations 
		      	  where vcenabled = 1 AND vcvariationid = ".$this->_prodvariationid." AND vcproductid = ".$this->_prodid." ";
		$this->_prodvariationcombinations = new Interspire_Db_QueryIterator($GLOBALS['ISC_CLASS_DB'],$query);
		$enabledOptions = array();
		foreach($this->_prodvariationcombinations as $row){
			$options = explode(',',$row['vcoptionids']);
			foreach($options as $option){
				if(!in_array($option,$enabledOptions)){
					$enabledOptions[] = $option;
				}
			}
		}

		$vValues = array();
		if(!empty($enabledOptions)){
			//get an initial list of options values
			$query = "select voname,voptionid,vovalue from [|PREFIX|]product_variation_options
					 where vovariationid =".$this->_prodvariationid." AND voptionid IN (".implode(',',$enabledOptions).") 
					 order by vovaluesort";
			$res = $GLOBALS['ISC_CLASS_DB']->Query($query);
			while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($res)){
				$vValues[$row['voname']][$row['voptionid']] = $row['vovalue'];
			}
		}
		$this->_prodvariationvalues = $vValues;

	}
	function GetProductVariationOptions(){
		return $this->_prodvariationoptions;
	}
	function GetProductVariationOptionValues(){
		return $this->_prodvariationvalues;
	}
	function IsOptionRequired(){
		if($this->_prodoptionsrequired == 1){
			return true;
		}else{
			return false;
		}
	}
	function setProductsGlobals($row){
		$GLOBALS['options'] = '';
		if($row['prodvariationid'] != 0){
			$GLOBALS['options'] = "<input type='button' id='varbutton%%GLOBAL_count%%' style='display:none;border:0;-moz-border-radius:7px;-webkit-border-radius:7px;border-radius:7px;cursor:pointer;text-decoration:underline;' value='Choose Options'>";
		}
		$GLOBALS['qty']			= $row['prodcurrentinv'];
		$GLOBALS['productid']	= $row['productid'];
		$GLOBALS['prodname']	= $row['prodname'];
		$GLOBALS['prodprice'] 	= '$'.number_format($row['prodcalculatedprice'],2);
		$GLOBALS['prodimage']	= $post_url = $this->getImageURL().'/product_images/'.$row['imagefilestd'];
		$GLOBALS['proddesc']	= $row['proddesc'];
		#$GLOBALS['prodprice']	= '$'.number_format($row['prodcalculatedprice'],2);
		$GLOBALS['prodcode']	= $row['prodcode'];
		$GLOBALS['brandname']	= $row['brandname'];
		$this->generateQtyDropDown($row['prodcurrentinv']);
	}
	function generateQtyDropDown($qty){
		$output = '';
		for($x=1;$x<=$qty;$x++){
			$GLOBALS['qty'] = $x;
			$output.= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('productdetails_customprodpackage_dropdown');
		}
		$GLOBALS['SNIPPETS']['dropdown'] = $output;
		$this->_qtydropdown = $GLOBALS['SNIPPETS']['dropdown'];
	}
	function getImageURL(){
		require_once ISC_BASE_PATH . '/addons/customprodpackage/addon.customprodpackage.php';
		$url = new addon_customprodpackage;
		$url = $url->curPageURL();
		$url_parts = explode('/',$url);
		$index = '';//main index to remove
		foreach($url_parts as $k => $v){
			if($v == 'products'){
				$index = $k ;
			}
		}
		$post_url = array();
		foreach($url_parts as $k => $v ){
			if($k < $index){
				$post_url[] = $v;
			}
		}
		$post_url = implode('/',$post_url);
		return $post_url;
	}
	/**
	* Generate the product images/thumbnails to be shown
	**/
	private function SetProductImages($productId){
		$GLOBALS['ProductThumbWidth'] = ISC_PRODUCT_IMAGE::getSizeWidth(ISC_PRODUCT_IMAGE_SIZE_STANDARD);
		$GLOBALS['ProductThumbHeight'] = ISC_PRODUCT_IMAGE::getSizeHeight(ISC_PRODUCT_IMAGE_SIZE_STANDARD);
		$this->_prodthumbwidth = ISC_PRODUCT_IMAGE::getSizeWidth(ISC_PRODUCT_IMAGE_SIZE_STANDARD);
		$this->_prodthumbheight = ISC_PRODUCT_IMAGE::getSizeHeight(ISC_PRODUCT_IMAGE_SIZE_STANDARD);

		$GLOBALS['ProductMaxTinyWidth'] = ISC_PRODUCT_IMAGE::getSizeWidth(ISC_PRODUCT_IMAGE_SIZE_TINY);
		$GLOBALS['ProductMaxTinyHeight'] = ISC_PRODUCT_IMAGE::getSizeHeight(ISC_PRODUCT_IMAGE_SIZE_TINY);
		$this->_prodmaxtinywidth = ISC_PRODUCT_IMAGE::getSizeWidth(ISC_PRODUCT_IMAGE_SIZE_TINY);
		$this->_prodmaxtinyheight = ISC_PRODUCT_IMAGE::getSizeHeight(ISC_PRODUCT_IMAGE_SIZE_TINY);



		$GLOBALS['ProductTinyBoxWidth'] = $GLOBALS['ProductMaxTinyWidth']+4;
		$GLOBALS['ProductTinyBoxHeight'] = $GLOBALS['ProductMaxTinyHeight']+4;


		$GLOBALS['ProductMaxZoomWidth'] = ISC_PRODUCT_IMAGE::getSizeWidth(ISC_PRODUCT_IMAGE_SIZE_ZOOM);
		$GLOBALS['ProductMaxZoomHeight'] = ISC_PRODUCT_IMAGE::getSizeHeight(ISC_PRODUCT_IMAGE_SIZE_ZOOM);
		$this->_prodmaxzoomwidth = ISC_PRODUCT_IMAGE::getSizeWidth(ISC_PRODUCT_IMAGE_SIZE_ZOOM);
		$this->_prodmaxzoomheight = ISC_PRODUCT_IMAGE::getSizeHeight(ISC_PRODUCT_IMAGE_SIZE_ZOOM);

		$GLOBALS['ProductZoomWidth'] = ISC_PRODUCT_IMAGE::getSizeWidth(ISC_PRODUCT_IMAGE_SIZE_ZOOM);
		$GLOBALS['ProductZoomHeight'] = ISC_PRODUCT_IMAGE::getSizeHeight(ISC_PRODUCT_IMAGE_SIZE_ZOOM);


		$productImages = ISC_PRODUCT_IMAGE::getProductImagesFromDatabase($productId);
		$GLOBALS['NumProdImages'] = count($productImages);

		$GLOBALS['CurrentProdThumbImage'] = 0;
		$this->_currentprodthumbimage = $GLOBALS['CurrentProdThumbImage'];
		$thumb = '';
		$curZoomImage = '';
		$GLOBALS['SNIPPETS']['ProductTinyImages'] = '';
		$GLOBALS['HideImageCarousel'] = 'display:none;';
		$GLOBALS['HideMorePicturesLink'] = 'display:none;';
		$thumbImageDescription = '';
		$i = 0;

		$GLOBALS['ProdImageJavascript'] = '';
		$GLOBALS['ProdImageZoomJavascript'] = '';
		$GLOBALS['LightBoxImageList'] = '';
		$GLOBALS['ZoomImageMaxWidth'] = 0;
		$GLOBALS['ZoomImageMaxHeight'] = 0;
		$GLOBALS['ZoomImageMaxWidthHeight'] = 0;
		$GLOBALS['HideAlwaysLinkedMorePicturesLink'] = 'display: none';

		if ($GLOBALS['NumProdImages']) {
			//Show image carousel

			if ($GLOBALS['NumProdImages'] == 2) {
				$var = "MorePictures1";
			} else if ($GLOBALS['NumProdImages'] == 1) {
				$var = "SeeLargerImage";
			} else {
				$var = "MorePictures2";
			}

			$GLOBALS['SeeMorePictures'] = sprintf(GetLang($var), count($productImages) - 1);
			$GLOBALS['HideAlwaysLinkedMorePicturesLink'] = '';

			if (GetConfig('ProductImagesTinyThumbnailsEnabled')) {
				$GLOBALS['HideImageCarousel'] = '';
			} else {
				$GLOBALS['HideMorePicturesLink'] = '';
			}

			$continue=false;

			foreach ($productImages as $productImage) {

				$thumbURL = '';
				$zoomImageURL = '';

				try{
					$thumbURL = $productImage->getResizedUrl(ISC_PRODUCT_IMAGE_SIZE_STANDARD, true);
					//$GLOBALS['ProductThumbURL'] = $thumbURL;
				} catch (Exception $exception) {
					// do nothing, will result in returning blank string, which is fine
				}

				try{
					$zoomImageURL = $productImage->getResizedUrl(ISC_PRODUCT_IMAGE_SIZE_ZOOM, true);
				} catch (Exception $exception) {
					// do nothing, will result in returning blank string, which is fine
				}

				if($thumbURL == '' && $zoomImageURL == '') {
					continue;
				}

				$resizedZoomDimension = $productImage->getResizedFileDimensions(ISC_PRODUCT_IMAGE_SIZE_ZOOM);
				$resizedTinyDimension = $productImage->getResizedFileDimensions(ISC_PRODUCT_IMAGE_SIZE_TINY);

				//calculate the max zoom image width and height
				if ($GLOBALS['ZoomImageMaxWidth'] < $resizedZoomDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_WIDTH]) {

					$GLOBALS['ZoomImageMaxWidth'] = $resizedZoomDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_WIDTH];
					//the height of the image has got the max width needed to calulate the image fancy box size.
					$GLOBALS['ZoomImageMaxWidthHeight'] = $resizedZoomDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_HEIGHT];
				}

				if ($GLOBALS['ZoomImageMaxHeight'] < $resizedZoomDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_HEIGHT]) {
					$GLOBALS['ZoomImageMaxHeight'] = $resizedZoomDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_HEIGHT];
					//the width of the image has got the max height needed to calulate the image fancy box size.
					$GLOBALS['ZoomImageMaxHeightWidth'] = $resizedZoomDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_HEIGHT];
				}

				$GLOBALS['ImageDescription'] = isc_html_escape($productImage->getDescription());
				if($GLOBALS['ImageDescription'] == '') {
					$GLOBALS['ImageDescription'] = GetLang("Image") . " " . ($i + 1);
				}

				//show image carousel
				if(GetConfig('ProductImagesTinyThumbnailsEnabled')==1) {

					$GLOBALS['ProdImageJavascript'] .= "
						ThumbURLs[".$i."] = " . isc_json_encode($thumbURL) . ";
						ProductImageDescriptions[".$i."] = " . isc_json_encode($GLOBALS['ImageDescription']) . ";
					";
					$this->_prodimagejavascript .= "
						ThumbURLs[".$i."] = " . isc_json_encode($thumbURL) . ";
						ProductImageDescriptions[".$i."] = " . isc_json_encode($GLOBALS['ImageDescription']) . ";
					";
					$GLOBALS['TinyImageOverJavascript'] = "showProductThumbImage(".$i.")";
					//$GLOBALS['ProductTinyImageURL'] = $productImage->getResizedUrl(ISC_PRODUCT_IMAGE_SIZE_TINY, true);

					try{
						$GLOBALS['ProductTinyImageURL'] = $productImage->getResizedUrl(ISC_PRODUCT_IMAGE_SIZE_TINY, true);
						//$GLOBALS['ProductThumbURL'] = $thumbURL;
					} catch (Exception $exception) {
						// do nothing, will result in returning blank string, which is fine
					}

					$GLOBALS['ProductThumbIndex'] = $i;
					if(GetConfig('ProductImageMode') == 'lightbox') {
						$GLOBALS['TinyImageClickJavascript'] = "showProductImageLightBox(".$i."); return false;";

					} else {
						$GLOBALS['TinyImageClickJavascript'] = "showProductImage('".GetConfig('ShopPath')."/productimage.php', ".$productId.", ".$i.");";
					}

					$GLOBALS['TinyImageWidth'] = $resizedTinyDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_WIDTH];
					$GLOBALS['TinyImageHeight'] = $resizedTinyDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_HEIGHT];
					$GLOBALS['TinyImageTopPadding'] = floor(($GLOBALS['ProductMaxTinyHeight'] - $GLOBALS['TinyImageHeight']) / 2);
					$GLOBALS['SNIPPETS']['ProductTinyImages'] .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("PackageSubProd_ProductTinyImage");
					$this->_imgtiny = $GLOBALS['SNIPPETS']['ProductTinyImages'];
					$continue = true;
				}

				if(GetConfig('ProductImagesImageZoomEnabled') == 1) {
					//check if zoom image is large enough for image zoomer
					if($resizedZoomDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_WIDTH]<ISC_PRODUCT_IMAGE_MIN_ZOOM_WIDTH && $resizedZoomDimension[ISC_PRODUCT_IMAGE_DIMENSIONS_HEIGHT]<ISC_PRODUCT_IMAGE_MIN_ZOOM_HEIGHT) {
						$zoomImageURL = '';
					}
					$GLOBALS['ProdImageZoomJavascript'] .= "
						ZoomImageURLs[".$i."] = " . isc_json_encode($zoomImageURL) . ";
					";
					$continue = true;
				}

				//	$GLOBALS['ProductZoomImageURL'] = $zoomImageURL;

				//this image is the product page thumbnail
				if($i==0) {
					//get the thumb image for product page
					$thumb = $thumbURL;
					$curZoomImage = $zoomImageURL;
					$thumbImageDescription = $GLOBALS['ImageDescription'];
					//if there is no need to loop through images anymore, get out from the loop.
					if($continue === false) {
						break;
					}
				}
				$i++;
			}
		}

		$GLOBALS['VisibleImageTotal'] = $i+1;

		$GLOBALS['ShowImageZoomer'] = GetConfig('ProductImagesImageZoomEnabled');
		if ($GLOBALS['ShowImageZoomer']) {
			$GLOBALS['SNIPPETS']['ProductImageZoomer'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet("PackageSubProd_ProductImageZoomer");
			$this->_imgzoomer = $GLOBALS['SNIPPETS']['ProductImageZoomer'];
		}
		$GLOBALS['ZoomImageURL'] = $curZoomImage;

		//if no product thumb images
		if($thumb == '') {
			if(GetConfig('DefaultProductImage') == 'template') {
				$thumb = $GLOBALS['IMG_PATH'].'/ProductDefault.gif';
			}
			else {
				$thumb = GetConfig('ShopPath').'/'.GetConfig('DefaultProductImage');
			}
		}

		// need to check for variation images
		//$GLOBALS['HideOnNoImages'] = 'display: none;';
		$GLOBALS['ImageDescription'] = $thumbImageDescription;
		$GLOBALS['ThumbImageURL'] = $thumb;


		//image popup javascript for the thumbnail image when the page is loaded
		$imagePopupLink = "showProductImage('".GetConfig('ShopPath')."/productimage.php', ".$productId.");";
		$GLOBALS['ImagePopupLink'] = $imagePopupLink;
		$GLOBALS['TinyImageClickJavascript'] = $imagePopupLink;

		// If we're showing images as a lightbox, we need to load up the URLs for the other images for this product
		if(GetConfig('ProductImageMode') == 'lightbox') {
			$GLOBALS['TinyImageClickJavascript'] = "showProductImageLightBox(); return false;";
			//$GLOBALS['LightBoxImageJavascript'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('PackageSubProd_ProductImagesLightBox');
		}

		if ($GLOBALS['NumProdImages']) {
			$GLOBALS['SNIPPETS']['ProductThumbImage'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('PackageSubProd_ProductThumbImage');
			$this->_imgthumb = $GLOBALS['SNIPPETS']['ProductThumbImage'];
		} else {
			$GLOBALS['SNIPPETS']['ProductThumbImage'] = $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('PackageSubProd_ProductThumbImagePlaceholder');
			$this->_imgthumb = $GLOBALS['SNIPPETS']['ProductThumbImage'];
		}
	}

}