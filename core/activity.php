
<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

require_once('../includes/base.php');
require_once('../database/Activity.php');
// add classes encapsulating database access (datamining)
require_once('../database/ActivityStream.php');
require_once('../database/RecommenderSystem.php');

if  ($s_type != "Docente" and $s_type != "Investigador" and $s_type != "Administrador"){
  $_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
  header("Location: ../index.php");
  die; 
}

$aid= $_GET['activity'];


// record click in the database. this will enable model-building
ActivityStream::insert(session_id(), $aid);
// get recommendation based on the current activity based on past data
$recommendation = RecommenderSystem::getByAntecedent($aid);
$rec = trim($recommendation["consequent"]);
$smarty->assign("recommendation", $rec);


$activity = Activity::getAllInfoActivity($aid);

$smarty->assign('activity', $activity);

$smarty->display('core/activity.tpl');

?>
