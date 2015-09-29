<?php

ini_set('display_errors',1); 
error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Operations.php');
require_once('../database/Movements.php');
require_once('../database/Centers.php');

$ccid= $_POST["ccid"];
$ccnomecurto= $_POST["ccnomecurto"];

$smarty->assign("ccid", $ccid);
$smarty->assign("ccnomecurto", $ccnomecurto);


$cid= $_POST["cid"];

$spent = Movements::getTotalSpentForCab($cid);
$missing = Movements::get_NONReimbursed_SpentForCab($cid);
$captive_due = $spent - $missing;


$current_budgets = Centers::getBudgets($ccid);

$available_budget = $current_budgets['saldodisponivel'];
$captive_budget = $current_budgets['saldocativo'];


//captive due must be re-transfered to available
$available_budget_n = $available_budget + $captive_due;
$captive_budget_n = $captive_budget - $captive_due;

Centers::updateBudget($ccid, $available_budget_n, $captive_budget_n);

Operations::updateCab($cid, 'Fechada');

$_SESSION["s_messages"][] = 'Cabimentação fechada!';

$_SESSION["s_last_op"] = "filtro_fechar_cab";


$smarty->display('manager/hidden_form.tpl');

$ccid = null;
$ccnomecurto = null;


?>