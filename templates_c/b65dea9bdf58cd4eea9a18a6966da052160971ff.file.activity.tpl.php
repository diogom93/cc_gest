<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 23:37:54
         compiled from "../templates/core/activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55815932854a1c8397c0615-78894481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b65dea9bdf58cd4eea9a18a6966da052160971ff' => 
    array (
      0 => '../templates/core/activity.tpl',
      1 => 1419979072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55815932854a1c8397c0615-78894481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a1c839831c5',
  'variables' => 
  array (
    'recommendation' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1c839831c5')) {function content_54a1c839831c5($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="master">
<?php echo $_smarty_tpl->getSubTemplate ('core/activity_core.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="act_buttons">
<form action="javascript:history.go(-1);" method="GET">
	<input type="submit" value="Voltar" class="botao cancel" />
</form>
<?php if ($_smarty_tpl->tpl_vars['recommendation']->value){?>
	<form action="activity.php" method="GET">
		<input type="hidden" name="activity" value="<?php echo $_smarty_tpl->tpl_vars['recommendation']->value;?>
"/>
		<input type="submit" value="Atividade Semelhante" class="botao similar" />
	</form>
<?php }?>

</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php }} ?>