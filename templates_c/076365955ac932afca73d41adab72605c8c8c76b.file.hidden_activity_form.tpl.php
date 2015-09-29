<?php /* Smarty version Smarty-3.1.5, created on 2014-12-26 18:01:55
         compiled from "../templates/manager/hidden_activity_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1680386914549d930e076c26-66762552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '076365955ac932afca73d41adab72605c8c8c76b' => 
    array (
      0 => '../templates/manager/hidden_activity_form.tpl',
      1 => 1419613294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1680386914549d930e076c26-66762552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_549d930e0dd22',
  'variables' => 
  array (
    'ccid' => 0,
    'ccnomecurto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549d930e0dd22')) {function content_549d930e0dd22($_smarty_tpl) {?><body onload="javascript:document.getElementById('secret_form').submit();">
	
	<form id="secret_form" method="POST" action="../manager/operations.php">
		<input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
" />
		<input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
" />
	</form>
	
</body><?php }} ?>