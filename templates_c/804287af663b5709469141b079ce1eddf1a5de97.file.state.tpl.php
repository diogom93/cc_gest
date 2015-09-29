<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 20:52:37
         compiled from "../templates/manager/state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572357321548a1c6572f246-01363962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '804287af663b5709469141b079ce1eddf1a5de97' => 
    array (
      0 => '../templates/manager/state.tpl',
      1 => 1419969127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572357321548a1c6572f246-01363962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548a1c657453e',
  'variables' => 
  array (
    'selected_cc_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a1c657453e')) {function content_548a1c657453e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="../css/state.css"/>

<head>
	  <title>CC_GEST - Gestão</title>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					<fieldset>
						<legend>Informação Geral</legend>

						<ul>
						
							<li><ul class="general_info">
								<li><span class="info_title" >ID: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['id'];?>
 </span></li>
								<li><span class="info_title" >Nome Curto: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['nomecurto'];?>
 </span> </li>
								<li><span class="info_title" >Nome: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['nome'];?>
 </span> </li>
								<li><span class="info_title" >Tipo: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['tipo'];?>
 </span> </li>
								<li><span class="info_title" >Orçamento: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['orcamento'];?>
  €</span> </li>
								<li><span class="info_title" >Instituição: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['instituicao'];?>
 </span> </li>
								<li><span class="info_title" >Data Início: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['datainicio'];?>
  </span></li>
							</ul>
							<?php if ($_smarty_tpl->tpl_vars['selected_cc_info']->value['descricao']){?>
							<li><span class="info_title" >Descrição: </span><label class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['descricao'];?>
 </label> </li>
							<?php }?>
							<span class="info_title saldos" >Saldos</span>
							<li><ul class="saldo_info">
							<li><span class="info_title" >Saldo Disponível: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['saldodisponivel'];?>
  €</span> </li>
							<li><span class="info_title" >Saldo Cativo: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['saldocativo'];?>
  €</span> </li>
							<li><span class="info_title" >Saldo Autorizado: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['selected_cc_info']->value['saldoautorizado'];?>
  €</span> </li>
							</ul>
						
						</ul>
					</fieldset>
		</div>


	</div><!--end .home_conteudo-->




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>