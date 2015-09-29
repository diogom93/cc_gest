<?php /* Smarty version Smarty-3.1.5, created on 2014-12-31 00:19:12
         compiled from "../templates/admin/cabs_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91226840054a011d5e36335-50280796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9b1ff6c65aff3e0d67b200f0cab4a69794efd39' => 
    array (
      0 => '../templates/admin/cabs_info.tpl',
      1 => 1419981543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91226840054a011d5e36335-50280796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a011d5ef444',
  'variables' => 
  array (
    'pendingCab' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a011d5ef444')) {function content_54a011d5ef444($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<link rel="stylesheet" type="text/css" href="../css/list_core.css"/>
<link rel="stylesheet" type="text/css" href="../css/analises_info.css"/>
	  
	  	  <script type="text/javascript" src="../js/jquery.js">
</script>
	  
<script type="text/javascript" src="../js/core_tips.js"></script>
<head>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					

							<form action="../admin/cabs_action.php" method="POST">
							  
					  <fieldset>
						<legend>Informação Geral - Cabimentação </legend>

						<ul>
							<li><ul class="general_info">
								<li><span class="info_title" >ID: </span><span class="info_txt" name="cid"> <?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['cid'];?>
 </span></li>
								<input type="hidden" name="aval_cid" value="<?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['cid'];?>
"/>
								<li><span class="info_title" >Data: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['datapedido'];?>
 </span> </li>
								<li><span class="info_title" >Valor: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['valor'];?>
 €</span> </li>
								<input type="hidden" name="aval_valor" value="<?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['valor'];?>
"/>
								<li><span class="info_title" >Atividade: </span><span class="info_txt Scrollable core_node" for='activity_core.php?activity=<?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['atividade'];?>
'> <?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['atividade'];?>
 </span> </li>
								<li><span class="info_title" >Centro de Custos Associado: </span><span class="info_txt  Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['cc'];?>
'> <?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['cc'];?>
  </span></li>
							</ul>
							<?php if ($_smarty_tpl->tpl_vars['pendingCab']->value['descricao']){?>
							<li><span class="info_title" >Descrição: </span><label class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['pendingCab']->value['descricao'];?>
 </label> </li>
							<?php }?>
						</ul>



						</ul>
						</fieldset>
						<fieldset>

								<label class="info_title" >Decisão: </label>
								<input class="field_decision" type="radio" size="10" name="decisao" id="aprovada" checked="checked" required value="Aprovada">Aprovar</br>
								<input class="field_decision" type="radio" size="10" name="decisao" id="rejeitada" value="Rejeitada">Rejeitar</br>

								<label class="info_title explanation" >Justificação: </label>
								<textarea class="field_explanation" type="text" rows="4" column="128" name="justificacao" required id="justificacao"></textarea>



						<input type="submit" value="Continuar" class="botao cont" />
					</form>
					<form action="javascript:history.go(-1);" method="GET">
						<input type="submit" value="Cancelar" class="botao cancel" />
					</form>

					</fieldset>
		</div>


	</div><!--end .home_conteudo-->

			<div class="core_info" id="core_popper">
	</div>




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>