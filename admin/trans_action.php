<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Analysis.php');
require_once('../database/Centers.php');


if ($s_type != "Administrador" and $s_category != "Financeiro") {
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}


$tid= $_POST["aval_tid"];

$smarty->assign('tid', $tid);


$ccid_dest = Centers::getDestCCByTID($tid);
$ccid_orig = Centers::getOrigCCByTID($tid);


$valor= floatval( str_replace(" ", "", $_POST["aval_valor"]));

$arrayDestBudgets = Centers::getBudgets($ccid_dest);

$saldoDestdisponivel = $arrayDestBudgets["saldodisponivel"];
$saldoDestcativo = $arrayDestBudgets["saldocativo"];

$saldoDestdisponivel_n = $saldoDestdisponivel+$valor;

$arrayOrigBudgets = Centers::getBudgets($ccid_orig);

$saldoOrigdisponivel = $arrayOrigBudgets["saldodisponivel"];
$saldoOrigcativo = $arrayOrigBudgets["saldocativo"];

$saldoOrigdisponivel_n = $saldoOrigdisponivel-$valor;

$veredito = $_POST["veredito"];

	if(!Analysis::insertAval($tid, $s_nif, null, $veredito))
	{
		header('Location: ../admin/analises.php');
		die;
	}
	
	if( $veredito == "Aprovada" )
	{
		$errval = Analysis::updateTrans($tid, 'Completa');
		Centers::updateBudget($ccid_dest, $saldoDestdisponivel_n, $saldoDestcativo);
		Centers::updateBudget($ccid_orig, $saldoOrigdisponivel_n, $saldoOrigcativo);

	}
	else //assume rejection
		$errval = Analysis::updateTrans($tid, 'Rejeitada');


	if($errval == false)
	{
		Analysis::deleteAval($tid);
		header('Location: ../index.php');
	}
	
	if( $veredito == "Aprovada" )
	  $_SESSION["s_messages"][] = 'Transferência ' . $tid . ' aprovada!';
	else
	  $_SESSION["s_messages"][] = 'Transferência ' . $tid . ' rejeitada!';
	
	header('Location: ../admin/analises.php');




?>