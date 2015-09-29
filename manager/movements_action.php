<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Operations.php');
require_once('../database/Centers.php');


$ccid= $_POST["ccid"];
$ccnomecurto= $_POST["ccnomecurto"];

$smarty->assign("ccid", $ccid);
$smarty->assign("ccnomecurto", $ccnomecurto);


$cabimentacao= $_POST["cab_id"];
$valor = $_POST["op_value"];
$tipo = $_POST["op_type"];

$instituicaobeneficiaria = $_POST["op_institution"];

$benef_type = $_POST["op_benef"];

$arrayBudgets = Centers::getBudgets($ccid);

$saldodisponivel = $arrayBudgets["saldodisponivel"];
$saldocativo = $arrayBudgets["saldocativo"];

if( $tipo == "Despesa")
{
	$saldodisponivel_n = $saldodisponivel-$valor;
	$saldocativo_n = $saldocativo-$valor;
	$_SESSION["s_last_op"] = "filtro_movimento";
	$_SESSION["s_messages"][] = 'Movimento efetuado com sucesso!';
}
else
{
	//assume transfer
	$saldodisponivel_n = $saldodisponivel+$valor;
	$saldocativo_n = $saldocativo;
	$_SESSION["s_last_op"] = "filtro_transf_ext";
	$_SESSION["s_messages"][] = 'Transferência registada com sucesso!';
}

Centers::updateBudget($ccid, $saldodisponivel_n, $saldocativo_n);

$mid = Operations::insertMovement(null, $cabimentacao, $valor, $tipo, $instituicaobeneficiaria);


if( $mid == null)
{
	//$_SESSION["s_errors"]["generic"] = "Erro na base de dados.";
	//restore budgets:
	Centers::updateBudget($ccid, $saldodisponivel, $saldocativo);
	header("Location: ../index.php");
	die;
}

if ($benef_type == "UP")
{
	$ben = null;
}
else
{
	$ben = $_POST["person_selection"];
}

if( !Operations::insertBenef($mid, $ben) )
{
	Operations::deleteMovement($mid);
	Centers::updateBudget($ccid, $saldodisponivel, $saldocativo);
	//$_SESSION["s_errors"]["generic"] = "Erro na base de dados.";
	header("Location: ../index.php");
	die;
}




$smarty->display('manager/hidden_form.tpl');

$ccid = null;
$ccnomecurto = null;


?>