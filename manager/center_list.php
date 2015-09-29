<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Centers.php');

if  ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador"){
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

$nif = $_SESSION["s_nif"];

$centers = Centers::getGenericInfoByNif($nif);

if($centers)
{
	$smarty->assign("cc_array", $centers);
	$smarty->assign("ccs_assigned", $centers.count());

}
else
{
	$smarty->assign("ccs_assigned", 0);
}

$_SESSION["s_last_op"] = "filtro_cabimentacao";

$smarty->display('manager/center_list.tpl');

?>
