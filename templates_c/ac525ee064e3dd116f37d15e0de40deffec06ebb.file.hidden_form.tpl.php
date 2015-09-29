<?php /* Smarty version Smarty-3.1.5, created on 2014-12-27 16:01:22
         compiled from "../templates/manager/hidden_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681821234549da6064f1e90-26427675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac525ee064e3dd116f37d15e0de40deffec06ebb' => 
    array (
      0 => '../templates/manager/hidden_form.tpl',
      1 => 1419684753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681821234549da6064f1e90-26427675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_549da606550ef',
  'variables' => 
  array (
    'ccid' => 0,
    'ccnomecurto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549da606550ef')) {function content_549da606550ef($_smarty_tpl) {?>
<body onload="javascript:document.getElementById('secret_form').submit();">
	<form id="secret_form" method="POST" action="../manager/operations.php">
		<input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
" />
		<input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
" />
	</form>
	
</body><?php }} ?>