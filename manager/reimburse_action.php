<?php
	//ini_set('display_errors',1); 
	//error_reporting(E_ALL);

	require_once('../includes/base.php');
	require_once('../database/Consultations.php');
	require_once('../database/Centers.php');
	require_once('../database/Movements.php');
	
	$ccid= $_POST["ccid"];
	$ccnomecurto = $_POST["ccnomecurto"];
	$mid= $_POST['r_movements_selection'];
	
	$smarty->assign("ccid", $ccid);
	$smarty->assign("ccnomecurto", $ccnomecurto);
	
	$cc = Centers::getById($ccid);
	$cativo = $cc["saldocativo"];
	
	$val = Movements::getMovementValue($mid);
	
	$valor = $cativo - $val["valor"];
	
	if (Centers::updateCaptiveBudget($ccid, $valor) != true) {
		header("Location: ../index.php");
		die;
	}
	
	if (Consultations::reimbursed($mid) == false) {
		Centers::updateCaptiveBudget($ccid, $cativo);
		header("Location: ../index.php");
		die;
	}
	
	$_SESSION["s_messages"][] = 'Reembolso registado com sucesso!';
	$smarty->display('manager/hidden_consult.tpl');
	
	$mid = null;
	$cc = null;
	$cativo = null;
	$valor = null;
?>