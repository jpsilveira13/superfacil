<?php
include(dirname(__FILE__)."/init.php");
require(dirname(__FILE__).'/includes/classes/class.groupbuy.php');
$GLOBALS['ISC_CLASS_GROUPBUY'] = GetClass('ISC_GROUPBUY');
$GLOBALS['ISC_CLASS_GROUPBUY'] -> HandlePage();
?>