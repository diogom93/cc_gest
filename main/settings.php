<?php
	require_once('../includes/base.php');
		
	if ($s_type != "Administrador" and $s_type != "Docente" and $s_type != "Investigador") {
		$_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
		header("Location: ../index.php");
		die;
	}
	
	$smarty->display('settings.tpl');
?>