
<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Centers.php');

if  ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador"){
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

$id=$_GET['center'];

$center = Centers::getById($id);

$smarty->assign('center', $center);


$smarty->display('core/center_core.tpl');

?>
