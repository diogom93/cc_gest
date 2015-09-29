<?php /* Smarty version Smarty-3.1.5, created on 2014-12-09 20:34:42
         compiled from "../templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158456824154846fd3e2bf79-20054649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e6ab708205027c9c504ae2cfd5769a310d78f1' => 
    array (
      0 => '../templates/main.tpl',
      1 => 1418153295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158456824154846fd3e2bf79-20054649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54846fd3f2cea',
  'variables' => 
  array (
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54846fd3f2cea')) {function content_54846fd3f2cea($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 
<h1>CC_GEST</h1>

<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="administrador"){?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/cc_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }elseif($_smarty_tpl->tpl_vars['s_type']->value=="docente"||$_smarty_tpl->tpl_vars['s_type']->value=="investigador"){?>

	<?php echo $_smarty_tpl->getSubTemplate ('manager/cc_manager.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }else{ ?>

  <p><em>Gestão e Administração de Centros de Custos.</em></p>
  <p></br>Para utilizar a plataforma efetue login.</p>

 <?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>