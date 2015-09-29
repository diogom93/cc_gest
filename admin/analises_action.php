<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Analysis.php');

if ($s_type != "Administrador" and $s_category != "Financeiro") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

$ct_id= $_GET["pending_cabtr_selection"];
$ct_type= $_GET["pending_cabtr2_selection"];

if ($ct_type == 'TI')
{
	$pendingTrans = Analysis::getPendingTrans($ct_id);


		if($pendingTrans)
		{
			$smarty->assign("pendingTrans", $pendingTrans);
			$smarty->assign("pendingTrans_assigned", 1); //no more than one was assigned, hopefuly

		}
		else
		{
			$smarty->assign("pendingTrans_assigned", 0);
		}
		

	$smarty->display('admin/trans_info.tpl');

}
else //assume that not-TI is a C
{
	$pendingCab = Analysis::getPendingCab($ct_id);


		if($pendingCab)
		{
			$smarty->assign("pendingCab", $pendingCab);
			$smarty->assign("pendingCab_assigned", 1);

		}
		else
		{
			$smarty->assign("pendingCab_assigned", 0);
		}

	$smarty->display('admin/cabs_info.tpl');
}




?>