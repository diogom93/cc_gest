<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 18:55:07
         compiled from "../templates/core/person_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115114575554a2e6d71d4500-28819750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2120b9a36bdd4aef8010a31c8f617615ec80db4' => 
    array (
      0 => '../templates/core/person_core.tpl',
      1 => 1419962102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115114575554a2e6d71d4500-28819750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a2e6d72d710',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a2e6d72d710')) {function content_54a2e6d72d710($_smarty_tpl) {?><html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
  	  <script type="text/javascript" src="../js/jquery.js"></script>
	  <script type="text/javascript" src="../js/core_tips.js"></script>
  
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="person_core_ul">
	
	<li><span class="member">
		<label class="core_label field">NIF</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['user']->value['nif'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Nome</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['user']->value['nome'];?>
 </label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">E-mail</label>
		<label class="core_label value"> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Morada</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['user']->value['morada'];?>
</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Telefone</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['user']->value['telefone'];?>
</label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Tipo</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['user']->value['tipo'];?>
 </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Categoria</label>
		<label class="core_label value"><?php echo $_smarty_tpl->tpl_vars['user']->value['categoria'];?>
 </label>
	</span></li>
	
	</ul>
	
</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
	</body>
	
	</html><?php }} ?>