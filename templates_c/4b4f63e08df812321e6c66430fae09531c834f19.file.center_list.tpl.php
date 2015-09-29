<?php /* Smarty version Smarty-3.1.5, created on 2014-12-23 19:31:37
         compiled from "../templates/manager/center_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18007452775487789e7d67e3-56476042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4f63e08df812321e6c66430fae09531c834f19' => 
    array (
      0 => '../templates/manager/center_list.tpl',
      1 => 1419359495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18007452775487789e7d67e3-56476042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5487789e928c6',
  'variables' => 
  array (
    'cc_array' => 0,
    'cc_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5487789e928c6')) {function content_5487789e928c6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<head>
<title>CC_HUB</title>
<link rel="stylesheet" type="text/css" href="../css/center_list.css"/>
<link rel="stylesheet" type="text/css" href="../css/accordion.css"/>
<script type="text/javascript" src="../js/jquery.js">
</script>
<script type="text/javascript" src="../js/acordeao_m.js">
</script>
</head>

<div class="caixa_principal">
  <fieldset class="contentor_principal">
   <legend class="legenda_contentor_principal">Centros de Custos</legend> <!-- Interior da caixa principal com legenda, inserir acordeão -->
 
   <div class="acordeao">
	
	<?php  $_smarty_tpl->tpl_vars['cc_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cc_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accordeon_item']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cc_item']->key => $_smarty_tpl->tpl_vars['cc_item']->value){
$_smarty_tpl->tpl_vars['cc_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accordeon_item']['iteration']++;
?>

		<div class="acc_seccao">
					<a class="acc_seccao_titulo" href="#acordeao_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['accordeon_item']['iteration'];?>
"> <?php echo $_smarty_tpl->tpl_vars['cc_item']->value['nome'];?>
</a>

					<div id="acordeao_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['accordeon_item']['iteration'];?>
" class="acc_seccao_conteudo">
						<p class="nomecurto">[<?php echo $_smarty_tpl->tpl_vars['cc_item']->value['nomecurto'];?>
]</p>
						<div class="info_geral">
							<ul class="tipo_e_instituicao">
								<li> <span class="txt_tipo" >Tipo: </span> <span class="geral_conteudo"> <?php echo $_smarty_tpl->tpl_vars['cc_item']->value['tipo'];?>
 </span> </li>
								<li> <span class="txt_instituicao" >Instituição: </span> <span class="geral_conteudo"><?php echo $_smarty_tpl->tpl_vars['cc_item']->value['instituicao'];?>
 </span></li>
							</ul>
						</div>
						
						<div class="info_saldo">
							<span class="txt_saldo">Saldo:</span>
							<ul class="saldos">
								<li> <span class="txt_disponivel" >Disponível: </span> <span class="saldo_conteudo"><?php echo $_smarty_tpl->tpl_vars['cc_item']->value['saldodisponivel'];?>
 €</span></li>
								<li> <span class="txt_autorizado" >Autorizado: </span> <span class="saldo_conteudo"><?php echo $_smarty_tpl->tpl_vars['cc_item']->value['saldoautorizado'];?>
 €</span></li>
								<li> <span class="txt_cativo" >Cativo: </span> <span class="saldo_conteudo"><?php echo $_smarty_tpl->tpl_vars['cc_item']->value['saldocativo'];?>
 €</span></li>
							</ul>
						</div>

						<!--<form action="state.php" method="POST">-->
						<!--<form action="consult.php" method="POST">-->



						<form action="state.php" method="POST">
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cc_item']->value['id'];?>
" name="ccid" id="ccid">
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cc_item']->value['nomecurto'];?>
" name="ccnomecurto" id="ccnomecurto">
							<input type="submit" class="button" value="Continuar" >
							<!--<button type="button" class="button">Continuar</button> -->
						</form>
					</div><!--end .acc_seccao_conteudo-->
				</div><!--end .acc_seccao-->


	<?php } ?>

	
   </div><!--end .acordeao-->
  </fieldset><!--end .contentor_principal-->
 </div><!--end .caixa_principal-->


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>