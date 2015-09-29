<?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);

	require_once('../includes/base.php');
	require_once('../database/Users.php');
	require_once('../database/Centers.php');
	
	$id = $_POST["close_cc_selection"];
	
	if (Centers::closeCenter($id) == true) {
		$_SESSION["s_messages"] = "Centro de custos fechado com sucesso";
	} else {
		$_SESSION["s_errors"]["generic"][] = "Erro ao fechar centro de custos";
		header("Location: gestao_interna.php");
		die;	
	}
	
	$id = null;	
	
	header("Location: gestao_interna.php");
?>