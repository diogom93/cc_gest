<?php /* Smarty version Smarty-3.1.5, created on 2014-12-07 23:02:52
         compiled from "../templates/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1541962565484ce8c219f63-32875932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe4725ae38b3c1ca55f1dc2f9f71e5e75db4ce4' => 
    array (
      0 => '../templates/messages.tpl',
      1 => 1417988719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1541962565484ce8c219f63-32875932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5484ce8c23723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484ce8c23723')) {function content_5484ce8c23723($_smarty_tpl) {?>  <!-- warning and notification messages -->
  <div id="messages">
<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
    <span class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
<?php } ?>
  </div>
<?php }} ?>