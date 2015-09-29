<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-07 19:58:20
         compiled from "../templates/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17077034335484a34c6ae8a7-63191066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20fc1b4b9d81cbc5c0b78af8248cf69d5295837f' => 
    array (
      0 => '../templates/errors.tpl',
      1 => 1322587744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17077034335484a34c6ae8a7-63191066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5484a34c6c4c29_65912781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484a34c6c4c29_65912781')) {function content_5484a34c6c4c29_65912781($_smarty_tpl) {?>  <!-- error messages -->
  <div id="errors">
<?php if ($_smarty_tpl->tpl_vars['s_errors']->value['generic']) {?>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_errors']->value['generic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
<?php } ?>
<?php }?>
  </div>
<?php }} ?>
