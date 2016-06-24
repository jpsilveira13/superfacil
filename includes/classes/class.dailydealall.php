<?php
//class for getting main template of active daily deals page
class ISC_DAILYDEALALL
{


	public function HandlePage()
	{
		
		$GLOBALS['ISC_CLASS_TEMPLATE']->SetTemplate("dailydealall");
		$GLOBALS['ISC_CLASS_TEMPLATE']->ParseTemplate();	

	}
	

}
