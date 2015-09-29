<?

set_include_path("../lib");

require_once('../includes/smarty.php');
require_once('../includes/session.php');

if (isset($_SESSION["s_type"])) {
	$smarty->display('home.tpl');
}
else
	$smarty->display('main.tpl');

?>
