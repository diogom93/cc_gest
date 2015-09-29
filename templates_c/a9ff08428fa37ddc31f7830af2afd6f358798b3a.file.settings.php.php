<?php /* Smarty version Smarty-3.1.5, created on 2014-12-26 23:48:02
         compiled from "settings.php" */ ?>
<?php /*%%SmartyHeaderCode:1077216681549de5a28ce6e8-25769280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ff08428fa37ddc31f7830af2afd6f358798b3a' => 
    array (
      0 => 'settings.php',
      1 => 1419631437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077216681549de5a28ce6e8-25769280',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_549de5a293b47',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549de5a293b47')) {function content_549de5a293b47($_smarty_tpl) {?><<?php ?>?php
	require_once('../includes/base.php');
		
	if ($s_type != "Administrador" and $s_type != "Docente" and $s_type != "Investigador") {
		$_SESSION["s_errors"]["generic"][] = 'Não tem permissões';
		header("Location: ../index.php");
		die;
	}
	
	$smarty->display('settings.tpl');
?<?php ?>><?php }} ?>