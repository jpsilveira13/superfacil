
<?php
include(dirname(__FILE__)."/init.php");
require(dirname(__FILE__).'/includes/classes/class.dailydeal.php');
$GLOBALS['ISC_CLASS_DAILY_DEAL'] = GetClass('ISC_DAILYDEAL');
$GLOBALS['ISC_CLASS_DAILY_DEAL'] -> HandlePage();

