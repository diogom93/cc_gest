<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Users.php');


$email= $_POST["uuser"];
$password = $_POST["upassmd5"];

if (Users::existsUsernamePassword($email, $password)) {
  
  $_SESSION["s_email"] = $email;
  
  $visitor = Users::getByEmail($email);
  
  if( $visitor )
  {
    $_SESSION["s_name"] = $visitor["nome"];
    $_SESSION["s_type"] = $visitor["tipo"];
    $_SESSION["s_nif"] = $visitor["nif"];
    $_SESSION["s_category"] = $visitor["categoria"];
    
  }
  else
  {
    $_SESSION["s_errors"]["generic"][] = 'Serviço temporariamente indisponível';
  }
  
  
  $_SESSION["s_messages"][] = 'Autenticação com sucesso';
}
else {
  // store user input values
  $_SESSION["s_values"] = $_POST;
  $_SESSION["s_errors"]["generic"][] = 'E-mail ou password errados!';

}

header("Location: " . $_SERVER["HTTP_REFERER"]);


?>