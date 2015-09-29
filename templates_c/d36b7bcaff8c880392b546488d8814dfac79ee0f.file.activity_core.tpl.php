<?php /* Smarty version Smarty-3.1.5, created on 2014-12-29 02:45:46
         compiled from "../templates/manager/activity_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97334471454a0a507b14687-27391995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36b7bcaff8c880392b546488d8814dfac79ee0f' => 
    array (
      0 => '../templates/manager/activity_core.tpl',
      1 => 1419816216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97334471454a0a507b14687-27391995',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a0a507b97cb',
  'variables' => 
  array (
    'activity' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0a507b97cb')) {function content_54a0a507b97cb($_smarty_tpl) {?><html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
</head>
	
	<body>
	<div class="activity_info" >
	
	<ul>
	
	<li><span class="member">
		<label class="field">AID</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['activity']->value['aid'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="field">Nome</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['activity']->value['nome'];?>
 </label>
	</span></li>

	<li><span class="member">
		<label class="field">Data de Início</label>
		<label class="value"> <?php echo $_smarty_tpl->tpl_vars['activity']->value['datainicio'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="field">Data de Fim</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['activity']->value['datafim'];?>
 </label>
	</span></li>

	<li><span class="member">
		<label class="field">Tipo</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['activity']->value['tipo'];?>
 </label>
	</span></li>
	
	</ul>
	
</div>
	
	</body>
	
	</html><?php }} ?>