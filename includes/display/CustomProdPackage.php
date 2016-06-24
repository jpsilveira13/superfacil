<?php
class ISC_CUSTOMPRODPACKAGE_PANEL extends PRODUCTS_PANEL{
	public function setPanelSettings(){
		$this->showPackages();
	}
	function showPackages(){
		$query = $GLOBALS['ISC_CLASS_DB']->Query("
			select a.*,b.prodname,c.* from [|PREFIX|]custom_prod_package a 
			inner join [|PREFIX|]products b on a.main_prod_id = b.productid
			inner join [|PREFIX|]product_images c on a.main_prod_id = c.imageprodid
			where a.is_enabled = '1' and c.imageisthumb = '1'
		");
		$output = '';
		while($row = $GLOBALS['ISC_CLASS_DB']->Fetch($query)){
			$this->setPackagesGlobals($row);
			$output .= $GLOBALS['ISC_CLASS_TEMPLATE']->GetSnippet('customprodpackage');
		}
		$GLOBALS['SNIPPETS']['customprodpackage'] = $output;
	}
}
?>