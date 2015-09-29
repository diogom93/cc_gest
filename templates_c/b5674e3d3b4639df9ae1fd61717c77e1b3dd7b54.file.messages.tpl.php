<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-07 19:58:20
         compiled from "../templates/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3312795485484a34c690eb5-59934776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5674e3d3b4639df9ae1fd61717c77e1b3dd7b54' => 
    array (
      0 => '../templates/messages.tpl',
      1 => 1417965404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3312795485484a34c690eb5-59934776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5484a34c6a02d9_44806512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484a34c6a02d9_44806512')) {function content_5484a34c6a02d9_44806512($_smarty_tpl) {?>  <!-- warning messages - perhaps allow the admins to post notices? -->
  <div id="messages">
<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
    <span class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
<?php } ?>
  </div>
<?php }} ?>
