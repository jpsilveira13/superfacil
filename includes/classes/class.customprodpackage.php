<?php
class ISC_CUSTOMPRODPACKAGE{
	public function HandlePage(){
		$GLOBALS['ISC_CLASS_TEMPLATE']->SetTemplate("customprodpackage");
		$GLOBALS['ISC_CLASS_TEMPLATE']->ParseTemplate();
	}

}
?>