<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 13:13:18
         compiled from "../templates/core/activity_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26248809954a1c7181186c9-47604078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9a354929391a2ebab485269e1d14cc8924f08b' => 
    array (
      0 => '../templates/core/activity_core.tpl',
      1 => 1419941563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26248809954a1c7181186c9-47604078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a1c7181b187',
  'variables' => 
  array (
    'activity' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1c7181b187')) {function content_54a1c7181b187($_smarty_tpl) {?>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />

<body>
	<div class="core_info" >
	
	<ul id="activity_core_ul">
	
	<li class="member">
		<label class="core_label field">AID</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['activity']->value['aid'];?>
 </label>
	</li>
	
	<li class="member">
		<label class="core_label field">Nome</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['activity']->value['nome'];?>
 </label>
	</li>

	<li class="member">
		<label class="core_label field">Data de Início</label>
		<label class="core_label value"> <?php echo $_smarty_tpl->tpl_vars['activity']->value['datainicio'];?>
</label>
	</li>
	
	<li class="member">
		<label class="core_label field">Data de Fim</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['activity']->value['datafim'];?>
 </label>
	</li>

	<li class="member">
		<label class="core_label field">Tipo</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['activity']->value['tipo'];?>
 </label>
	</li>
	
	</ul>
	
</div>
<?php }} ?>