<?php /* Smarty version Smarty-3.1.5, created on 2014-12-16 22:23:55
         compiled from "../templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55610993254906484b4d536-90448151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a41eac582d2148397213d1ce2828f2edfaf5ea0' => 
    array (
      0 => '../templates/profile.tpl',
      1 => 1418765031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55610993254906484b4d536-90448151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54906484c3dd8',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54906484c3dd8')) {function content_54906484c3dd8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="../css/state.css"/>

<head>
	  <title>CC_GEST - Perfil</title>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					<fieldset>
						<legend>Informação Pessoal</legend>

						<ul>
						
							<li><ul class="general_info">
								<li><span class="info_title" >NIF: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['user']->value['nif'];?>
 </span></li>
								<li><span class="info_title" >Nome: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['user']->value['nome'];?>
 </span> </li>
								<li><span class="info_title" >E-mail: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
 </span> </li>
								<li><span class="info_title" >Morada: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['user']->value['morada'];?>
 </span> </li>
								<li><span class="info_title" >Telefone: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['user']->value['telefone'];?>
</span> </li>
								<li><span class="info_title" >Tipo: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['user']->value['tipo'];?>
 </span> </li>
								<li><span class="info_title" >Categoria: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['user']->value['categoria'];?>
  </span></li>
							</ul>

							</ul>

					</fieldset>
		</div>


	</div><!--end .home_conteudo-->




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>