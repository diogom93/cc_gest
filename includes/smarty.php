<?php

// load Smarty library
require('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setConfigDir('../configs/');
$smarty->setCacheDir('../cache/');
//$smarty->caching = Smarty::CACHING_LIFETIME_CURRENT; 
$smarty->assign('app_name', 'CC_Gest');
// clear out all cache files
//$smarty->clearAllCache();

//test it - configs was missing!
//$smarty->testInstall();

?>