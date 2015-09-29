<?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);
	
	require_once('../includes/base.php');
	require_once('../includes/session.php');
	require_once('../database/Users.php');
	
	$pass_act = $_POST["u_pwmd5"];
	$pass_n = $_POST["u_pwnmd5"];
	$pass_nr = $_POST["u_pwnrmd5"];
	
	if (Users::existsUsernamePassword($_SESSION["s_email"], $pass_act) == true) {
		if ($pass_n == $pass_nr) {
			if (Users::changePassword($pass_act, $pass_n) == true) {
				$_SESSION["s_messages"][] = 'Password alterada com sucesso';
			} else {
				$_SESSION["s_errors"]["generic"][] = "Serviço indisponível. Por favor tente mais tarde";
			}
		} else {
			$_SESSION["s_errors"]["generic"][] = "Passwords não coincidem";
		}				
	} else {
		$_SESSION["s_errors"]["generic"][] = "Password errada";
	}
		
	header("Location: settings.php");
	
	$pass_act = null;
	$pass_n = null;
	$pass_nr = null;
?>