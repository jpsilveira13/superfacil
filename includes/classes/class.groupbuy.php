<?php
class ISC_GROUPBUY
{

	public function HandlePage(){
		$GLOBALS['ISC_CLASS_TEMPLATE']->SetTemplate("groupbuy");
		$GLOBALS['ISC_CLASS_TEMPLATE'] ->ParseTemplate();
	}
}

?>