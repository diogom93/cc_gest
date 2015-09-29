<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 18:45:26
         compiled from "../templates/core/ti_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71574526754a2e100528e18-32567083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edab3636ac1160c0d7fea34793ac9c2f1c56d118' => 
    array (
      0 => '../templates/core/ti_core.tpl',
      1 => 1419961259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71574526754a2e100528e18-32567083',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a2e10064d11',
  'variables' => 
  array (
    'trans' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a2e10064d11')) {function content_54a2e10064d11($_smarty_tpl) {?><html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
  	  <script type="text/javascript" src="../js/jquery.js"></script>
	  <script type="text/javascript" src="../js/core_tips.js"></script>
  
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="ti_core_ul">
	
	<li><span class="member">
		<label class="core_label field">TID</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['trans']->value['ID'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Valor</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['trans']->value['Valor'];?>
 €</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Pedida por</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['trans']->value['Destino'];?>
 </label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Na data de</label>
		<label class="core_label value"> <?php echo $_smarty_tpl->tpl_vars['trans']->value['DataPedido'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Ao CC</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['trans']->value['Origem'];?>
 €</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Estado</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['trans']->value['Estado'];?>
</label>
	</span></li>
	
	<?php if ($_smarty_tpl->tpl_vars['trans']->value['DataAceite']){?>
	<li><span class="member">
		<label class="core_label field">Ultima Atualização</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['trans']->value['DataAceite'];?>
 </label>
	</span></li>
	<?php }?>
	
	</ul>
	
</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
	</body>
	
	</html><?php }} ?>