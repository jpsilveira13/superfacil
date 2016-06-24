<?php

	include(dirname(__FILE__)."/init.php");
	$GLOBALS['ISC_CLASS_CART'] = GetClass('ISC_CUSTOMPACKCART');
	$GLOBALS['ISC_CLASS_CART']->HandlePage();