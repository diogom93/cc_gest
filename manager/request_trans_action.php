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

$cc = $_POST["trans1_activity_selection"];


$eid = Operations::insertTrans($valor);

if( $eid == false )
{
	header("../index.php");
}
else if( !Operations::insertRequestTrans($eid, $ccid, null) ) //ccid - destination
{
	Operations::deleteTrans($eid);
	
	header("../index.php");
}
else if( !Operations::provideTrans($eid, $cc, null, "Pendente") ) //cc - origin
{
	Operations::deleteTrans($eid);
	Operations::deleteRequestTrans($eid);
	
	header("../index.php");
}

$_SESSION["s_messages"][] = 'Tranferência Interna pedida ao Centro de Custos ' . $cc . '!';

$_SESSION["s_last_op"] = "filtro_transferencia1";

$smarty->display('manager/hidden_form.tpl');


$ccid = null;
$ccnomecurto = null;


?>