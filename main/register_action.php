<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Users.php');
require_once('../database/Centers.php');

$nome= $_POST["u_user"];
$password = $_POST["u_pwmd5"];
$email = $_POST["u_email"];
$morada = $_POST["u_address"];
$telefone = $_POST["u_telephone"];
$nif = $_POST["u_nif"];
$tipo = $_POST["u_type"];
$categoria = $_POST["u_category"];

if ( Users::register($nome, $email, $morada, $telefone, $nif, $tipo, $categoria) == false)
{
	header("Location: register.php");
	die;
}

$cc_id = Centers::insert('Centro de Custos Pessoal - ' . $nome, 'CC_P', 0, 'Universidade do Porto', 'Pessoal', 0, null, $nif, null, null, null);

if( $cc_id == false )
{
	//rollback user
	Users::delete($nif);
	header("Location: register.php");
	die;
}

//add user authorization
if( Users::registerAuthorization($email, $password) == false)
{
	//rollback user and center
	Centers::deleteAllCentersByNif($cc_id);
	Users::delete($nif);
	header("Location: register.php");
	die;
}
			

header("Location: index.php");

?>