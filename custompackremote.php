<?php
	define('ISC_AJAX', 1);
	include(dirname(__FILE__)."/init.php");
	$GLOBALS['ISC_CLASS_CUSTOMPACKREMOTE'] = GetClass('ISC_CUSTOMPACKREMOTE');
	$GLOBALS['ISC_CLASS_CUSTOMPACKREMOTE']->HandleToDo();