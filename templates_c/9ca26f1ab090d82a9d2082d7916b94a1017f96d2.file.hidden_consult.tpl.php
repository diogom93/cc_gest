<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 02:25:38
         compiled from "../templates/manager/hidden_consult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74419859654a1fb6c8c0b59-61241640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ca26f1ab090d82a9d2082d7916b94a1017f96d2' => 
    array (
      0 => '../templates/manager/hidden_consult.tpl',
      1 => 1419902711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74419859654a1fb6c8c0b59-61241640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a1fb6c9bec4',
  'variables' => 
  array (
    'ccid' => 0,
    'ccnomecurto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1fb6c9bec4')) {function content_54a1fb6c9bec4($_smarty_tpl) {?>
<body onload="javascript:document.getElementById('secret_form').submit();" >
	<form id="secret_form" method="POST" action="../manager/consult.php">
		<input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
" />
		<input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
" />
	</form>
	
</body><?php }} ?>