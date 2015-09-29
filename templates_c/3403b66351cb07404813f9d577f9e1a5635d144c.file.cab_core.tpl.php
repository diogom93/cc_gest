<?php /* Smarty version Smarty-3.1.5, created on 2014-12-29 16:16:38
         compiled from "../templates/manager/cab_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104975789054a16ffa61f411-65781162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3403b66351cb07404813f9d577f9e1a5635d144c' => 
    array (
      0 => '../templates/manager/cab_core.tpl',
      1 => 1419866196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104975789054a16ffa61f411-65781162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a16ffa7119a',
  'variables' => 
  array (
    'cab' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a16ffa7119a')) {function content_54a16ffa7119a($_smarty_tpl) {?><html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
</head>
	
	<body>
	<div class="core_info" >
	
	<ul>
	
	<li><span class="member">
		<label class="field">CID</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['cid'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="field">Data do Pedido</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['datapedido'];?>
 </label>
	</span></li>

	<li><span class="member">
		<label class="field">Estado</label>
		<label class="value"> <?php echo $_smarty_tpl->tpl_vars['cab']->value['estado'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="field">Valor</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['valor'];?>
 €</label>
	</span></li>

	<?php if ($_smarty_tpl->tpl_vars['cab']->value['descricao']){?>
	<li><span class="member">
		<label class="field">Descrição</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['descricao'];?>
 </label>
	</span></li>
	<?php }?>
	
	<li><span class="member">
		<label class="field">Atividade</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['atividade'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="field">CC</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['cc'];?>
 </label>
	</span></li>
	
	</ul>
	
</div>
	
	</body>
	
	</html><?php }} ?>