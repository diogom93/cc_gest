<?

require_once('../includes/base.php');
require_once('../database/Movements.php');
require_once('../database/Activity.php');
require_once('../database/Centers.php');
require_once('../database/Consultations.php');
require_once('../database/Users.php');

//ini_set('display_errors',1); 
//error_reporting(E_ALL);


$ccid= $_POST["ccid"];
$ccnomecurto= $_POST["ccnomecurto"];


if ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador" or $ccid == null) {
  $_SESSION["s_errors"]["generic"] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

//id of the center
//instead of using it as a session variable, just use it as a smarty one.

$smarty->assign("ccid", $ccid);
$smarty->assign("ccnomecurto", $ccnomecurto);


$activities = Activity::getAllActivities();


if($activities)
{
	$smarty->assign("activities_array", $activities);
	$smarty->assign("activities_number", count($activities));

}
else
{
	$smarty->assign("activities_number", 0);
}


$allCabs = Consultations::getAllOpenCabs($ccid);

if($allCabs)
{
	$allCabsRemainders = [];
	
	foreach( $allCabs as $each_cab)
	{
	  $spent = Movements::getTotalSpentForCab($each_cab['cid']);
	  $allCabsRemainders[$each_cab['cid']] = $each_cab['valor'] - $spent;
	}
	
	$smarty->assign("allCabs_array", $allCabs);
	$smarty->assign("allCabsRemainders_array", $allCabsRemainders);
	$smarty->assign("allCabs_assigned", count($allCabs));

}
else
{
	$smarty->assign("allCabs_assigned", 0);
}




$infoAllCabs = Consultations::getInfoAllOpenCabs($ccid);

if($infoAllCabs)
{
	$smarty->assign("infoAllCabs_array", $infoAllCabs);
	$smarty->assign("infoAllCabs_assigned", count($infoAllCabs));

}
else
{
	$smarty->assign("infoAllCabs_assigned", 0);
}







$allCenters = Centers::getAllCenters($ccid);


if($allCenters)
{
	$smarty->assign("allCenters_array", $allCenters);
	$smarty->assign("allCenters_number", count($allCenters));

}
else
{
	$smarty->assign("allCenters_number", 0);
}

$allPendingProvidedTrans = Consultations::getAllPendingProvidedTrans($ccid);


if($allCenters)
{
	$smarty->assign("allPendingProvidedTrans_array", $allPendingProvidedTrans);
	$smarty->assign("allPendingProvidedTrans_number", count($allPendingProvidedTrans));

}
else
{
	$smarty->assign("allPendingProvidedTrans_number", 0);
}


$users = Users::getPeople();
	
	if ($users) {
		$smarty->assign("users_array", $users);
		$smarty->assign("users_assigned", count($users));
	} else {
		$smarty->assign("users_assigned", 0);
	}





$smarty->display('manager/operations.tpl');

$_SESSION['s_last_inputs'] = null;

$ccid = null;
$ccnomecurto = null;

?>
