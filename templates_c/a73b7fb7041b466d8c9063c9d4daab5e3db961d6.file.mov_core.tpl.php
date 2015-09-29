<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 20:04:54
         compiled from "../templates/core/mov_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109526588554a2f645609c96-55230511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73b7fb7041b466d8c9063c9d4daab5e3db961d6' => 
    array (
      0 => '../templates/core/mov_core.tpl',
      1 => 1419966290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109526588554a2f645609c96-55230511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a2f6457065d',
  'variables' => 
  array (
    'mov_info' => 0,
    'r_mov_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a2f6457065d')) {function content_54a2f6457065d($_smarty_tpl) {?><html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
  	  <script type="text/javascript" src="../js/jquery.js"></script>
	  <script type="text/javascript" src="../js/core_tips.js"></script>
  
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="movement_core_ul">
	
	<li><span class="member">
		<label class="core_label field">MID</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['mov_info']->value['mid'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Valor</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['mov_info']->value['valor'];?>
 €</label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Data</label>
		<label class="core_label value"> <?php echo $_smarty_tpl->tpl_vars['mov_info']->value['data'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Tipo</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['mov_info']->value['tipo'];?>
</label>
	</span></li>

	
	<li><span class="member">
	<?php if ($_smarty_tpl->tpl_vars['mov_info']->value['tipo']=="Despesa"){?>
		<label class="core_label field">À ordem de</label>
	<?php }else{ ?>
		<label class="core_label field">Proveniente de</label>
	<?php }?>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['mov_info']->value['instituicaobeneficiaria'];?>
</label>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['mov_info']->value['tipo']=="Despesa"){?>
	<li><span class="member">
		<label class="core_label field">Cabimentação</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['mov_info']->value['cabimentacao'];?>
 </label>
	</span></li>
	<?php }?>
	
	<li><span class="member">
		<label class="core_label field">Beneficiário</label>
		<?php if ($_smarty_tpl->tpl_vars['mov_info']->value['beneficia']){?>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['mov_info']->value['beneficia'];?>
 </label>
		<?php }else{ ?>
		<label class="core_label value">UP </label>
		<?php }?>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['r_mov_info']->value){?>
	<li><span class="member">
		<label class="core_label field">Suportado por</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['r_mov_info']->value['suportadopor'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Reembolsado</label>
		<?php if ($_smarty_tpl->tpl_vars['r_mov_info']->value['reembolsado']==true){?>
			<label class="core_label value">Sim </label>
		<?php }else{ ?>
			<label class="core_label value">Não </label>
		<?php }?>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['r_mov_info']->value['reembolsado']==true){?>
	<li><span class="member">
		<label class="core_label field">Data do Reembolso</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['r_mov_info']->value['datareembolso'];?>
 </label>
	</span></li>
	<?php }?>
	<?php }?>
	
	</ul>
	
</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
	</body>
	
	</html><?php }} ?>