<?php /* Smarty version Smarty-3.1.5, created on 2014-12-31 00:27:52
         compiled from "../templates/admin/trans_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167113717954a0120fa0b211-50839599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff1a185330ff1558bb6c642ddc47bf12954370b' => 
    array (
      0 => '../templates/admin/trans_info.tpl',
      1 => 1419981534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167113717954a0120fa0b211-50839599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a0120fabd9f',
  'variables' => 
  array (
    'pendingTrans' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a0120fabd9f')) {function content_54a0120fabd9f($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



	  <link rel="stylesheet" type="text/css" href="../css/list_core.css"/>
	  <link rel="stylesheet" type="text/css" href="../css/analises_info.css"/>
	  
	  	  <script type="text/javascript" src="../js/jquery.js">
</script>
	  
<script type="text/javascript" src="../js/core_tips.js"></script>

<head>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					<fieldset>
						<legend>Informação Geral - Transferência Interna </legend>

						<ul> 
						
							<form action="../admin/trans_action.php" method="POST">


							<li><ul class="general_info">
								<li><span class="info_title" >ID: </span><span class="info_txt" name="tid"> <?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['ID'];?>
 </span></li>
								<input type="hidden" name="aval_tid" value="<?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['ID'];?>
"/>
								<li><span class="info_title" >Valor: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['Valor'];?>
 €</span> </li>
								<input type="hidden" name="aval_valor" value="<?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['Valor'];?>
"/>
								<li><span class="info_title" >Pedida por: </span><span class="info_txt Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['Destino'];?>
'> <?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['Destino'];?>
  </span></li>
								<li><span class="info_title" >Na data de: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['DataPedido'];?>
 </span> </li>
								<li><span class="info_title" >Ao CC: </span><span class="info_txt  Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['Origem'];?>
'> <?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['Origem'];?>
 </span> </li>
								<li><span class="info_title" >Que aceitou na data de: </span><span class="info_txt"> <?php echo $_smarty_tpl->tpl_vars['pendingTrans']->value['DataAceite'];?>
 </span> </li>
								
							</ul>

						</ul>
						</fieldset>
						<fieldset>

								<label class="info_title" >Veredito: </label>
								<input class="field_decision" type="radio" size="10" name="veredito" id="aprovada" checked="checked" required value="Aprovada">Aprovar</br>
								<input class="field_decision" type="radio" size="10" name="veredito" id="rejeitada" value="Rejeitada">Rejeitar</br>

						<input type="submit" value="Continuar" class="botao cont" />
					</form>
					<form action="javascript:history.go(-1);" method="GET">
						<input type="submit" value="Cancelar" class="botao cancel" />
					</form>

					</fieldset>
				
				
		</div>

			<div class="core_info" id="core_popper">
	</div>



	</div><!--end .home_conteudo-->




<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>