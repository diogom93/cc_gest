<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-07 20:02:30
         compiled from "../templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18663593245484a34c42f5f6-99809775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bedde9ad3dacee1677a7df5ae5d30dcc443958e' => 
    array (
      0 => '../templates/header.tpl',
      1 => 1417978841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18663593245484a34c42f5f6-99809775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5484a34c4afc86_32798946',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    's_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484a34c4afc86_32798946')) {function content_5484a34c4afc86_32798946($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <title>CC_GEST - Gestão de Centros de Custos</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />

<?php if (isset($_smarty_tpl->tpl_vars['css']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['css']->value;?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['js']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['js']->value;?>

<?php }?>
</head>
<body>

  <!-- header tag -->
  <header>
    <p><a href="../">CC_Gest</a></p>
    <p>Gestão de Centros de Custos</p>
  </header>

  <!-- nav tag -->
  <nav>
    <!-- Don't show menu if user is not logged in -->
    <?php if ($_smarty_tpl->tpl_vars['s_user']->value) {?>
      <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </nav>

  <!-- page content  -->
  <div id="content">




<?php echo $_smarty_tpl->getSubTemplate ("messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
