<?php
	require_once('../includes/base.php');
	require_once('../includes/session.php');
	require_once('../database/Centers.php');
	require_once('../database/Users.php');

	if ($s_type != "Administrador" or $s_category != "Sistema") {
  		$_SESSION["s_errors"]["generic"][] = 'N‹o tem permiss›es';
  		header("Location: ../index.php");
 	 	die; 
	}
	
	$me = $_SESSION['s_nif'];
	$smarty->assign("me", $me);
	
	$centers = Centers::getOpenCenters();

	if($centers)
	{
		$smarty->assign("centers_array", $centers);
		$smarty->assign("centers_assigned", count($centers));

	}
	else
	{
		$smarty->assign("centers_assigned", 0);
	}
	
	$users = Users::getPeople();
	
	if ($users) {
		$smarty->assign("users_array", $users);
		$smarty->assign("users_assigned", count($users));
	} else {
		$smarty->assign("users_assigned", 0);
	}

	$smarty->display('admin/gestao_interna.tpl');
?>
