<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Operations.php');


$ccid= $_POST["ccid"];
$ccnomecurto= $_POST["ccnomecurto"];

$smarty->assign("ccid", $ccid);
$smarty->assign("ccnomecurto", $ccnomecurto);

//grab button press:
if (isset($_POST['reject'])) {
	// rejected
	$status = 'Rejeitada';
	
} else {
	//assume accepted	
	$status = 'Em Análise';
}

$tid = $_POST["trans2_activity_selection"];

Operations::updateTrans($tid, null, $status);

if( $status == 'Em Análise' )
	$_SESSION["s_messages"][] = 'Tranferência Interna ' . $tid . ' aceite!';
if( $status == 'Rejeitada' )
	$_SESSION["s_messages"][] = 'Tranferência Interna ' . $tid . ' rejeitada!';

$_SESSION["s_last_op"] = "filtro_transferencia2";
	
$smarty->display('manager/hidden_form.tpl');


$ccid = null;
$ccnomecurto = null;


?>