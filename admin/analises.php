<?

require_once('../includes/base.php');
require_once('../database/Analysis.php');

if ($s_type != "Administrador" or $s_category != "Financeiro") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

$pendingAnalysis = Analysis::getPendingAnalysis();

if($pendingAnalysis)
{
	$pendingRequests = [];
	$pendingCabs = [];
	
	foreach( $pendingAnalysis as $req)
	{
	  if($req['Tipo'] == 'C')
		$pendingCabs[] = $req;
	  else
		$pendingRequests[] = $req;
	}
	
	$smarty->assign("pendingRequests_array", $pendingRequests);
	$smarty->assign("pendingRequests_assigned", count($pendingRequests));
	$smarty->assign("pendingCabs_array", $pendingCabs);
	$smarty->assign("pendingCabs_assigned", count($pendingCabs));
	$smarty->assign("pendingAnalysis_array", $pendingAnalysis);
	$smarty->assign("pendingAnalysis_assigned", count($pendingAnalysis));
}
else
{
	$smarty->assign("pendingAnalysis_assigned", 0);
}



$smarty->display('admin/analises.tpl');

?>
