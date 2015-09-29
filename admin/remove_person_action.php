<?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);
	
	require_once('../includes/base.php');
	require_once('../includes/session.php');
	require_once('../database/Users.php');
	require_once('../database/Centers.php');
	
	$nif = $_POST["rm_person_selection"];
	
	$person = Users::getByNif($nif);
	
	Centers::deleteAllCentersByNif($nif);
	Users::deleteAuthorization($person["email"]);
	Users::delete($nif);
	$_SESSION["s_messages"][] = 'Pessoal removido com sucesso';
	
	header("Location: gestao_interna.php");
	
	$nif = null;
	$pass = null;
?>