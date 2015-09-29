<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 14:05:41
         compiled from "../templates/core/cab_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97744192754a1727c6d7415-10408338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '411edfd9c055b89f36273071bc2110200a7579fb' => 
    array (
      0 => '../templates/core/cab_core.tpl',
      1 => 1419944720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97744192754a1727c6d7415-10408338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a1727c7cb65',
  'variables' => 
  array (
    'cab' => 0,
    'spent' => 0,
    'captive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1727c7cb65')) {function content_54a1727c7cb65($_smarty_tpl) {?><html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
  	  <script type="text/javascript" src="../js/jquery.js"></script>
	  <script type="text/javascript" src="../js/core_tips.js"></script>
  
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="cab_core_ul">
	
	<li><span class="member">
		<label class="core_label field">CID</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['cid'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Data do Pedido</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['datapedido'];?>
 </label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Estado</label>
		<label class="core_label value"> <?php echo $_smarty_tpl->tpl_vars['cab']->value['estado'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Valor</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['valor'];?>
 €</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Gasto | Cativo</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['spent']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['captive']->value;?>
 €</label>
	</span></li>

	<?php if ($_smarty_tpl->tpl_vars['cab']->value['descricao']){?>
	<li><span class="member">
		<label class="core_label field">Descrição</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['descricao'];?>
 </label>
	</span></li>
	<?php }?>
	
	<li><span class="member">
		<label class="core_label field">Atividade</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['atividade'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">CC</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['cab']->value['cc'];?>
 </label>
	</span></li>
	
	</ul>
	
</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
	</body>
	
	</html><?php }} ?>