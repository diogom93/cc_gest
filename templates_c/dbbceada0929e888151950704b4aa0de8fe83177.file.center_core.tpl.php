<?php /* Smarty version Smarty-3.1.5, created on 2014-12-29 04:15:54
         compiled from "../templates/manager/center_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201510840054a0b46ab61562-15762308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbbceada0929e888151950704b4aa0de8fe83177' => 
    array (
      0 => '../templates/manager/center_core.tpl',
      1 => 1419819541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201510840054a0b46ab61562-15762308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a0b46ac6a16',
  'variables' => 
  array (
    'center' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0b46ac6a16')) {function content_54a0b46ac6a16($_smarty_tpl) {?><html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
</head>
	
	<body>
	<div class="core_info" >
	
	<ul>
	
	<li><span class="member">
		<label class="field">ID</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['id'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="field">Nome</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['nome'];?>
 </label>
	</span></li>

	<li><span class="member">
		<label class="field">Nome Curto</label>
		<label class="value"> [<?php echo $_smarty_tpl->tpl_vars['center']->value['nomecurto'];?>
]</label>
	</span></li>
	
	<li><span class="member">
		<label class="field">Orçamento</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['orcamento'];?>
 €</label>
	</span></li>

	<li><span class="member">
		<label class="field">Instituição</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['instituicao'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="field">Tipo</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['tipo'];?>
 </label>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['descricao']){?>
	<li><span class="member">
		<label class="field">Descrição</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['descricao'];?>
 </label>
	</span></li>
	<?php }?>
	
	<li><span class="member">
		<label class="field">Saldo Disponível</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['saldodisponivel'];?>
 €</label>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['saldocativo']){?>
	<li><span class="member">
		<label class="field">Saldo Cativo</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['saldocativo'];?>
 €</label>
	</span></li>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['saldoautorizado']){?>
	<li><span class="member">
		<label class="field">Saldo Autorizado</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['saldoautorizado'];?>
 €</label>
	</span></li>
	<?php }?>
	
	<li><span class="member">
		<label class="field">Data de Início</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['datainicio'];?>
 </label>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['datafim']){?>
	<li><span class="member">
		<label class="field">Data de Fim</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['datafim'];?>
 </label>
	</span></li>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['center']->value['gestor']){?>
	<li><span class="member">
		<label class="field">Gestor</label>
		<label class="value"><?php echo $_smarty_tpl->tpl_vars['center']->value['gestor'];?>
 </label>
	</span></li>
	<?php }?>
	
	
	</ul>
	
</div>
	
	</body>
	
	</html><?php }} ?>