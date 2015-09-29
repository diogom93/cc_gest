<?php


require_once('../includes/base.php');

if  ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador"){
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}


$smarty->display('home.tpl');

?>
