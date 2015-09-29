<?php /* Smarty version Smarty-3.1.5, created on 2014-12-28 18:45:47
         compiled from "../templates/admin/analise_cabimentacao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12424415254a02629beaed9-12141564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df3ba7b5b1bdde31465387d43c325a4fe55d3e4f' => 
    array (
      0 => '../templates/admin/analise_cabimentacao.tpl',
      1 => 1419788732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12424415254a02629beaed9-12141564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a02629c8f58',
  'variables' => 
  array (
    'cid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a02629c8f58')) {function content_54a02629c8f58($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="../css/state.css"/>

<head>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					<fieldset>
						<legend>Análise - Cabimentação </legend>



							<form action="../admin/cabs_action.php" method="POST">
						
							<div class="general_info">
								<label class="info_title" >Decisão: </label>
								<input class="field_decision" type="radio" size="10" name="decisao" id="aprovada" value="Aprovada">Aprovar</br>
								<input class="field_decision" type="radio" size="10" name="decisao" id="rejeitada" value="Rejeitada">Rejeitar</br>


								<label class="info_title" >Justificação: </label>
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" name="cid"/>
								<textarea class="field_explanation" type="text" rows="4" column="128" name="justificacao" id="justificacao"></textarea>
							</div>
						


						<input type="submit" value="Confirmar" class="button" />
					</form>
					<form action="javascript:history.go(-2);" method="GET">
						<input type="submit" value="Cancelar" class="button" />
					</form>

					</fieldset>

		</div>


	</div><!--end .home_conteudo--><?php }} ?>