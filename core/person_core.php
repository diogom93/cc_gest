<?

require_once('../includes/base.php');
require_once('../database/Users.php');

if  ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}


$nif = $_GET["nif"];


$user_info = Users::getByNif($nif);
$smarty->assign('user', $user_info);


$smarty->display('core/person_core.tpl');

?>
