<?php
	ini_set('display_errors',1); 
	error_reporting(E_ALL);
	
	require_once('../includes/base.php');
	require_once('../includes/session.php');
	require_once('../database/Users.php');
	
	$email_act = $_POST["email_act"];
	$email_n = $_POST["email_n"];
	
	if ($email_act == $_SESSION["s_email"]) {
		if (Users::changeEmailPerson($email_act, $email_n) == true) {
			if (Users::changeEmailUser($email_act, $email_n) == true) {
				$_SESSION["s_messages"][] = 'E-mail alterado com sucesso';
				$_SESSION["s_email"] = $email_n;
			} else {
				Users::changeEmailPerson($email_act, $email_act);
				$_SESSION["s_errors"]["generic"][] = "Serviço indisponível. Por favor tente mais tarde";
			}
		} else {
			$_SESSION["s_errors"]["generic"][] = "Serviço indisponível. Por favor tente mais tarde";
		}				
	} else {
		$_SESSION["s_errors"]["generic"][] = "E-mail errado";
	}
		
	header("Location: settings.php");
	
	$email_act = null;
	$email_n = null;
?>