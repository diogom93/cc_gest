<?php /* Smarty version Smarty-3.1.5, created on 2014-12-07 23:11:35
         compiled from "../templates/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:908504565484ce8c248208-26946221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2eac13291a77276b65b9b907b2ae160c0f3f2e3' => 
    array (
      0 => '../templates/errors.tpl',
      1 => 1417990210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '908504565484ce8c248208-26946221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5484ce8c26c76',
  'variables' => 
  array (
    's_errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484ce8c26c76')) {function content_5484ce8c26c76($_smarty_tpl) {?>  <!-- error messages -->
  <div id="errors">
	
	<p>Errors: <?php echo $_smarty_tpl->tpl_vars['s_errors']->value['generic'];?>
</p>
	
<?php if ($_smarty_tpl->tpl_vars['s_errors']->value['generic']){?>

<p>I'm ALIVE!</p>

<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s_errors']->value['generic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    <span class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
<?php } ?>
<?php }?>
  </div>
<?php }} ?>