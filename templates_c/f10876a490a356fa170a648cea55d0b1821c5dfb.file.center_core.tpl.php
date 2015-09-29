<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 11:46:39
         compiled from "../templates/core/center_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193485154054a18644e75f63-94664649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10876a490a356fa170a648cea55d0b1821c5dfb' => 
    array (
      0 => '../templates/core/center_core.tpl',
      1 => 1419936392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193485154054a18644e75f63-94664649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a1864508462',
  'variables' => 
  array (
    'center' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1864508462')) {function content_54a1864508462($_smarty_tpl) {?>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="center_core_ul">
	
	<li><span class="member">
		<label class="core_label field">ID</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['id'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Nome</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['nome'];?>
 </label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Nome Curto</label>
		<label class="core_label value"> [<?php echo $_smarty_tpl->tpl_vars['center']->value['nomecurto'];?>
]</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Orçamento</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['orcamento'];?>
 €</label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Instituição</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['instituicao'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Tipo</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['tipo'];?>
 </label>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['descricao']){?>
	<li><span class="member">
		<label class="core_label field">Descrição</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['descricao'];?>
 </label>
	</span></li>
	<?php }?>
	
	<li><span class="member">
		<label class="core_label field">Saldo Disponível</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['saldodisponivel'];?>
 €</label>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['saldocativo']){?>
	<li><span class="member">
		<label class="core_label field">Saldo Cativo</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['saldocativo'];?>
 €</label>
	</span></li>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['saldoautorizado']){?>
	<li><span class="member">
		<label class="core_label field">Saldo Autorizado</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['saldoautorizado'];?>
 €</label>
	</span></li>
	<?php }?>
	
	<li><span class="member">
		<label class="core_label field">Data de Início</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['datainicio'];?>
 </label>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['datafim']){?>
	<li><span class="member">
		<label class="core_label field">Data de Fim</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['datafim'];?>
 </label>
	</span></li>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['gestor']){?>
	<li><span class="member">
		<label class="core_label field">Gestor</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['center']->value['gestor'];?>
 </label>
	</span></li>
	<?php }?>
	
	
	</ul>
	
</div>
	
	</body>
<?php }} ?>