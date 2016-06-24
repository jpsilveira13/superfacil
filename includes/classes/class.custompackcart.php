<?php
class ISC_CUSTOMPACKCART{
	private $pageTitle = "";
	private $badCouponCode = false;
	private $badCouponMessage = "";
	private $cartErrorMessage = "";
	
	public $newCarItem = 0;

	public $subprods_id = array();
	public $subprods_qty = array();
	public $subprods_varid = array();
	

	public function HandlePage(){
		$action = "";
		$isselected = false;
		if(isset($_REQUEST['action'])){
			$action = isc_strtolower($_REQUEST['action']);
			if(isset($_REQUEST['SubProdIds'])){
				$this->subprods_id = $_REQUEST['SubProdIds'];
				$this->subprods_qty = $_REQUEST['SubProdQty'];
				$this->subprods_varid = $_REQUEST['SubProdvariation_id'];
				/*var_dump($this->subprods_id);
				var_dump($this->subprods_qty);
				var_dump($this->subprods_varid);*/
			}
		}

		$this->AddtoCart();
	}
	private function AddtoCart(){
		//package main product
		if(isset($_REQUEST['mainprodid']) && isset($_REQUEST['mainprodqty']) && isset($_REQUEST['mainprodvarid'])){
			$product_id = (int)$_REQUEST['mainprodid'];
			
			$variation = (int)$_REQUEST['mainprodvarid'];

			if($_REQUEST['mainprodvarid'] == ''){
				$variation  = $this->getMinOption($product_id);
			}

			$qty = (int)$_REQUEST['mainprodqty'];
			$query = $GLOBALS['ISC_CLASS_DB']->Query("
				select prodinvtrack from [|PREFIX|]products where productid = '".$product_id."'
			");
			$row = $GLOBALS['ISC_CLASS_DB']->Fetch($query);
			if($row['prodinvtrack'] != 0){
				$query = $GLOBALS['ISC_CLASS_DB']->Query("
					select prodcurrentinv from [|PREFIX|]products where productid = '".$product_id."'
				");
				$row = $GLOBALS['ISC_CLASS_DB']->Fetch($query);
				if($qty > $row['prodcurrentinv']){
					$qty = $row['prodcurrentinv'];//if product inventory is on track->if selected quantity for main product is greater than its current inventory, force qty to change
				}
			}
			
			try{
				$item = new ISC_QUOTE_ITEM;
				$item
					->setQuote($this->getQuote())
					->setProductId($product_id)
					->setQuantity($qty)
					->setVariation($variation);

				$this->getQuote()->addItem($item);
			}catch(ISC_QUOTE_EXCEPTION $e){

			}
			$_SESSION['JustAddedProduct'] = $product_id;


		}
		
		//package sub-products
		for($x = 0; $x < count($this->subprods_id); $x++){
			
			$product_id = (int)$this->subprods_id[$x];

			$variation = 0;

			if($this->subprods_varid[$x] != 0){
				$variation = (int)$this->subprods_varid[$x];
			}else{
				//in cases where the customer adds to cart an item with variation but didn't choose any option, select the first available option
				$variation = $this->getMinOption($product_id);
			}

			$qty = 1;
			if(is_array($this->subprods_qty[$x])){
				$qty = (int)array_pop($this->suborids_qty[$x]);
			}elseif($this->subprods_qty[$x] > 0){
				$qty = (int)$this->subprods_qty[$x];
			}

			try{
				$item = new ISC_QUOTE_ITEM;
				$item
					->setQuote($this->getQuote())
					->setProductId($product_id)
					->setQuantity($qty)
					->setVariation($variation);

				$this->getQuote()->addItem($item);
			}catch(ISC_QUOTE_EXCEPTION $e){

			}
			$_SESSION['JustAddedProduct'] = $product_id;
		}

		// Show the new contents of the cart
		$url = 'cart.php';
		/*if (GetConfig('ShowCartSuggestions')) {
			$url .= '?suggest='.$item->getId();
		}*/

		#if ($isFastCart) {
			#$this->_setupFastCartData($this->getQuote(), $item);
			#echo $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('FastCartThickBoxContent');
		#} else {
			redirect($url);
		#}
	}
	function getMinOption($product_id){
		$query = $GLOBALS['ISC_CLASS_DB']->Query("
				select prodvariationid from [|PREFIX|]products 
				where productid = '".$product_id."'
			");
		$row = $GLOBALS['ISC_CLASS_DB']->Fetch($query);
		if($row['prodvariationid'] != 0){
			$query = $GLOBALS['ISC_CLASS_DB']->Query("
				select combinationid from [|PREFIX|]product_variation_combinations 
				where vcvariationid = '".$row['prodvariationid']."' order by combinationid asc limit 1
			");
			$variation_row = $GLOBALS['ISC_CLASS_DB']->Fetch($query);
			return (int)$variation_row['combinationid'];
		}	
	}
	protected function getQuote(){
		return getCustomerQuote();
	}
}
?>