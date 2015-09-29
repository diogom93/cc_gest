<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);


	require_once('../includes/base.php');
	require_once('../database/Analysis.php');
	require_once('../database/Movements.php');
	
	if ($s_type != "Administrador" or $s_category != "Financeiro") {
        $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
		header("Location: ../index.php");
		die;
	}
	
	$closedAnalysis = Analysis::getClosedAnalysis();

	if($closedAnalysis)
	{
		$smarty->assign("closedAnalysis_array", $closedAnalysis);
		$smarty->assign("closedAnalysis_assigned", count($closedAnalysis));

	}
	else
	{
		$smarty->assign("closedAnalysis_assigned", 0);
	}
	
	$allMovements = Movements::getAllMovements2();

	if($closedAnalysis)
	{
		$smarty->assign("allMovements_array", $allMovements);
		$smarty->assign("allMovements_assigned", count($allMovements));

	}
	else
	{
		$smarty->assign("allMovements_assigned", 0);
	}
		
	$smarty->display('admin/historico.tpl');
?>