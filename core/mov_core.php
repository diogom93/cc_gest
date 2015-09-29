<?

require_once('../includes/base.php');
require_once('../database/Movements.php');

if  ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}


$mid = $_GET["mid"];


$mov_info = Movements::getMovementInfo($mid);
$smarty->assign('mov_info', $mov_info);

$r_mov_info = Movements::getRMovementAdditionalInfo($mid);

if( $r_mov_info )
{
	$smarty->assign('r_mov_info', $r_mov_info);
}


$smarty->display('core/mov_core.tpl');

?>
