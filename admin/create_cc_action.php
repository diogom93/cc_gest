<?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);

	require_once('../includes/base.php');
	require_once('../database/Users.php');
	require_once('../database/Centers.php');
	
	$nome = $_POST["cc_nome"];
	$nomec = $_POST["cc_nomec"];
	$orc = $_POST["cc_orc"];
	$inst = $_POST["cc_inst"];
	$type = $_POST["caixa_filtro"];
	$desc = $_POST["cc_desc"];
	$gest = $_POST["person_selection"];
	$anofim = $_POST["ativ_end_date_year"];
	$mesfim = $_POST["ativ_end_date_month"];
	$diafim = $_POST["ativ_end_date_day"];
	
	if( $anofim != null and $mesfim != null and $diafim != null)
		$datafim = date_create(''. $anofim . '-' . $mesfim . '-' . $diafim)->format('Y-m-d');
	else
		$datafim = null;
	
	if (Centers::insert($nome, $nomec, $orc, $inst, $type, $orc, null, $gest, $desc, 0, $datafim) != false) {
		$_SESSION["s_messages"] = "Centro de custos criado com sucesso";
	} else {
		$_SESSION["s_errors"]["generic"][] = "Erro ao criar centro de custos";
		header("Location: gestao_interna.php");
		die;
	}
	
	$nome = null;
	$nomec = null;
	$orc = null;
	$inst = null;
	$type = null;
	$desc = null;
	$gest = null;
	$anofim = null;
	$mesfim = null;
	$diafim = null;
	
	header("Location: gestao_interna.php");
?>