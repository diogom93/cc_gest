<?php /* Smarty version Smarty-3.1.5, created on 2014-12-28 16:46:59
         compiled from "../templates/admin/avaliacao_transferenciainterna.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132980332854a022673434d4-02509897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40be88c59a6cbc8c2d85f13339de4f7ededf9705' => 
    array (
      0 => '../templates/admin/avaliacao_transferenciainterna.tpl',
      1 => 1419781605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132980332854a022673434d4-02509897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54a022673cbac',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a022673cbac')) {function content_54a022673cbac($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="../css/state.css"/>

<head>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					<fieldset>
						<legend>Avaliação - Transferência interna </legend>



							<form action="../admin/trans_action.php" method="POST">
						
							<div class="general_info">
								<label class="info_title" >Veredito: </label>
								<input class="field_decision" type="text" size="10" name="veredito" id="veredito"/>


							</div>
						


						<input type="submit" value="Confirmar" class="button" />
					</fieldset>

				</form>
		</div>


	</div><!--end .home_conteudo--><?php }} ?>