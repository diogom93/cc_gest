<?

require_once('../includes/base.php');
require_once('../database/Centers.php');

$ccid= $_POST["ccid"];
$ccnomecurto= $_POST["ccnomecurto"];

if ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador" or $ccid == null) {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

//id of the center
//instead of using it as a session variable, just use it as a smarty one.
$smarty->assign("ccid", $ccid);
$smarty->assign("ccnomecurto", $ccnomecurto);


$info = Centers::getById($ccid);
$smarty->assign('selected_cc_info', $info);


$smarty->display('manager/state.tpl');
$ccid = null;
$ccnomecurto = null;

?>
