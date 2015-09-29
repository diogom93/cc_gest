<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Operations.php');


$ccid= $_POST["ccid"];
$ccnomecurto= $_POST["ccnomecurto"];

$smarty->assign("ccid", $ccid);
$smarty->assign("ccnomecurto", $ccnomecurto);


$valor = $_POST["op_value"];


$atividade = $_POST["cab_activity_selection"];

$descricao = $_POST["op_description"];


Operations::insertCab(null, 'Em Análise', $valor, $descricao, $atividade, $ccid);
$_SESSION["s_messages"][] = 'Cabimentação criada com sucesso!';

$_SESSION["s_last_op"] = "filtro_cabimentacao";

$smarty->display('manager/hidden_form.tpl');

$ccid = null;
$ccnomecurto = null;


?>