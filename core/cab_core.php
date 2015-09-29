
<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Consultations.php');
require_once('../database/Movements.php');
require_once('../database/Analysis.php');

if  ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador"){
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

$xid= $_GET['xid'];
$type = $_GET['type'];

if( $type == 'C' )
{
  $cab = Consultations::getAllInfoCab($xid);

  $spent = Movements::getTotalSpentForCab($xid);
  $missing = Movements::get_NONReimbursed_SpentForCab($xid);
  $captive_due = $spent - $missing;
  
  $smarty->assign('cab', $cab);
  $smarty->assign('spent', $spent);
  $smarty->assign('captive', $captive_due);
  
  $smarty->display('core/cab_core.tpl');
  
}
else
{
  $trans = Analysis::getInfoTrans($xid);
  
  $smarty->assign('trans', $trans);
  
  $smarty->display('core/ti_core.tpl');
}


?>
