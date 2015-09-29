
<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Activity.php');


if  ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador"){
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

$aid= $_GET['activity'];

$activity = Activity::getAllInfoActivity($aid);

$smarty->assign('activity', $activity);

$smarty->display('core/activity_core.tpl');

?>
