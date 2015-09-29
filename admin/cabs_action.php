<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Analysis.php');
require_once('../database/Centers.php');

if ($s_type != "Administrador") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}


$cid= $_POST["aval_cid"];

$smarty->assign('cid', $cid);


$ccid= Centers::getCCByCID($cid);


$valor= floatval( str_replace(" ", "", $_POST["aval_valor"]));

$arrayBudgets = Centers::getBudgets($ccid);

$saldocativo = $arrayBudgets["saldocativo"];

$saldocativo_n = $saldocativo+$valor;




$decisao = $_POST["decisao"];
$justificacao = $_POST["justificacao"];
if( $justificacao == "")
	$justificacao = null;

	if(!Analysis::insertAnal($cid, $s_nif, null, $decisao, $justificacao))
	{
		header('Location: ../admin/analises.php');
		die;
	}
	
	if( $decisao == "Aprovada" )
	{	
		$errval = Analysis::updateCab($cid, 'Aberta');
		Centers::updateCaptiveBudget($ccid, $saldocativo_n);
	}

	else //assume rejection
		$errval = Analysis::updateCab($cid, 'Rejeitada');

	
	if($errval == false)
	{
		Analysis::deleteAnal($cid);
		header('Location: ../index.php');
	}
	
	
	if( $decisao == "Aprovada" )
	  $_SESSION["s_messages"][] = 'Cabimentação ' . $cid . ' aprovada!';
	else
	  $_SESSION["s_messages"][] = 'Cabimentação ' . $cid . ' rejeitada!';

	header('Location: ../admin/analises.php');




?>