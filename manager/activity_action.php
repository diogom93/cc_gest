<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);


require_once('../includes/base.php');
require_once('../database/Activity.php');


$ccid= $_POST["ccid"];
$ccnomecurto= $_POST["ccnomecurto"];

$_SESSION['s_last_inputs']['cab_val'] = $_POST["cab_h_val"];
$_SESSION['s_last_inputs']['cab_desc'] = $_POST["cab_h_desc"];

$smarty->assign("ccid", $ccid);
$smarty->assign("ccnomecurto", $ccnomecurto);

$nome = $_POST["ativ_name"];
$anoinicio = $_POST["ativ_start_date_year"];
$mesinicio = $_POST["ativ_start_date_month"];
$diainicio = $_POST["ativ_start_date_day"];


$anofim = $_POST["ativ_end_date_year"];
$mesfim = $_POST["ativ_end_date_month"];
$diafim = $_POST["ativ_end_date_day"];

$tipo = $_POST["ativ_type"];


$ativ_start_date = date_create(''. $anoinicio . '-' . $mesinicio . '-' . $diainicio)->format('Y-m-d');

//check for optional
if( $anofim != null and $mesfim != null and $diafim != null)
	$ativ_end_date = date_create(''. $anofim . '-' . $mesfim . '-' . $diafim)->format('Y-m-d');
else
	$ativ_end_date = null;

Activity::createActivity($nome, $ativ_start_date, $ativ_end_date, $tipo);
$_SESSION["s_messages"][] = 'Atividade adicionada';

$_SESSION["s_last_op"] = "filtro_cabimentacao";

$smarty->display('manager/hidden_form.tpl');

$actval = null;
$actdesc = null;
$ccid = null;
$ccnomecurto = null;
?>
