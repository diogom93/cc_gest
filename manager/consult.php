<?

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Consultations.php');
require_once('../database/Activity.php');
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





$pendingCabs = Centers::getPendingRequests($ccid);


if($pendingCabs)
{
	$smarty->assign("pendingCabs_array", $pendingCabs);
	$smarty->assign("pendingCabs_assigned", count($pendingCabs));

}
else
{
	$smarty->assign("pendingCabs_assigned", 0);
}




$infoCabs = Centers::getAllRequests($ccid);


if($infoCabs)
{
	$smarty->assign("infoCabs_array", $infoCabs);
	$smarty->assign("infoCabs_assigned", count($infoCabs));

}
else
{
	$smarty->assign("infoCabs_assigned", 0);
}







$allCabs = Consultations::getAllCabs($ccid);

if($allCabs)
{
	$smarty->assign("allCabs_array", $allCabs);
	$smarty->assign("allCabs_assigned", count($allCabs));

}
else
{
	$smarty->assign("allCabs_assigned", 0);
}


$rMovements = Consultations::getRMovements($ccid);


if ($rMovements)
{
  $smarty->assign("rMovements_array", $rMovements);
  $smarty->assign("rMovements_assigned", count($rMovements));

} else
{
  $smarty->assign("rMovements_assigned", 0);
}


foreach( $allCabs as $cab)
{

	$cid = $cab['cid'];

	$infoAtiv[$cid] = Activity::getInfoActivities($cid);
	

}


if($infoAtiv)
{
	$smarty->assign("infoAtiv_array", $infoAtiv);
	$smarty->assign("infoAtiv_assigned", count($infoAtiv));

}
else
{
	$smarty->assign("infoAtiv_assigned", 0);
}



foreach( $allCabs as $cab)
{

	$cid = $cab['cid'];

	$allMovements[$cid] = Consultations::getAllMovements($cid);
	

}

if($allMovements)
	{
		$smarty->assign("allMovements_array", $allMovements);
		$smarty->assign("allMovements_assigned", count($allMovements));

	}
	else
	{
		$smarty->assign("allMovements_assigned", 0);
	}


	
$smarty->display('manager/consult.tpl');
$ccid = null;
$ccnomecurto = null;

?>
