<?php /* Smarty version Smarty-3.1.5, created on 2014-12-31 01:27:38
         compiled from "../templates/manager/consult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19009649935488c2e79e4173-56366585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124ba9f134ae51669078640548160906708c7d0e' => 
    array (
      0 => '../templates/manager/consult.tpl',
      1 => 1419983260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19009649935488c2e79e4173-56366585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5488c2e7a926c',
  'variables' => 
  array (
    'ccid' => 0,
    'ccnomecurto' => 0,
    'pendingCabs_assigned' => 0,
    'pendingCabs_array' => 0,
    'c_tab_item' => 0,
    'infoCabs_assigned' => 0,
    'infoCabs_array' => 0,
    'allCabs_assigned' => 0,
    'allCabs_array' => 0,
    'cc_tab_item' => 0,
    'allMovements_assigned' => 0,
    'allMovements_array' => 0,
    'k_cab' => 0,
    'm_cab' => 0,
    'm_tab_item' => 0,
    'rMovements_array' => 0,
    'rm_tab_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5488c2e7a926c')) {function content_5488c2e7a926c($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<head>
	  <title>CC_GEST - Gestão</title>
<link rel="stylesheet" type="text/css" href="../css/accordion.css"/>
<link rel="stylesheet" type="text/css" href="../css/tabelas.css"/>
<link rel="stylesheet" type="text/css" href="../css/consult.css"/>
<link rel="stylesheet" type="text/css" href="../css/list_core.css"/>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/movements.js"></script>
<script type="text/javascript" src="../js/activities.js"></script>
<script type="text/javascript" src="../js/acordeao_m.js"></script>
<script type="text/javascript" src="../js/table_search.js"></script>
<script type="text/javascript" src="../js/formval.js"></script>
<script type="text/javascript" src="../js/table_selection.js"></script>
<script type="text/javascript" src="../js/core_tips.js"></script>
</head>

<div class="caixa_principal">
  <fieldset class="contentor_principal">
   <legend class="legenda_contentor_principal"><span class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
</span> - Consultas</legend> <!-- Interior da caixa principal com legenda, inserir acordeão -->
 
   <div class="acordeao">


   	<div class="acc_seccao">
					<a class="acc_seccao_titulo" href="#acordeao_cabimentacoes">Pedidos pendentes</a>

					<div id="acordeao_cabimentacoes" class="acc_seccao_conteudo">
						
						<?php if ($_smarty_tpl->tpl_vars['pendingCabs_assigned']->value!=0){?>

						<span class="pesquisa_pending">
								
								<form class="searchbox">
									<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.pending">
								</form>
								
							</span>

						<div class="div_tabela">
							<table class="tabela">
								
								<thead>
									<tr class ="tabela_header" >
										<th>ID</th>
										<th>Valor(€)</th>
										<th>Data</th>
										<th>Tipo</th>
										<th>Estado</th>
									</tr>
								</thead>
								
								<tbody class="table_body">

									<?php  $_smarty_tpl->tpl_vars['c_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pendingCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c_tab_item']->key => $_smarty_tpl->tpl_vars['c_tab_item']->value){
$_smarty_tpl->tpl_vars['c_tab_item']->_loop = true;
?>
									<tr class ="tabela_linha pending">
										<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['ID'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Tipo'];?>
'><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['ID'];?>
</label></td>
										<td><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Valor'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Data'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Tipo'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Estado'];?>
</td>
									</tr>
									
									<?php } ?>	


								</tbody>
					
							</table>
							
						</div>

						<?php }else{ ?>
							<span class="aviso_txt">Não tem cabimentações pendentes de momento.</span>
						<?php }?>


					</div><!--end .acc_seccao_conteudo-->
		</div><!--end .acc_seccao-->



<div class="acc_seccao">
					<a class="acc_seccao_titulo" href="#acordeao_todas_cabimentacoes">Histórico de pedidos</a>

					<div id="acordeao_todas_cabimentacoes" class="acc_seccao_conteudo">
						
						<?php if ($_smarty_tpl->tpl_vars['infoCabs_assigned']->value!=0){?>

						<span class="pesquisa_all">
								
								<form class="searchbox">
									<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.history">
								</form>
								
							</span>

						<div class="div_tabela">
							<table class="tabela">
								
								<thead>
									<tr class ="tabela_header" >
										<th>ID</th>
										<th>Valor(€)</th>
										<th>Estado</th>
										<th>Data</th>
										<th>Tipo</th>
										
									</tr>
								</thead>
								
								<tbody class="table_body">

									<?php  $_smarty_tpl->tpl_vars['c_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infoCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c_tab_item']->key => $_smarty_tpl->tpl_vars['c_tab_item']->value){
$_smarty_tpl->tpl_vars['c_tab_item']->_loop = true;
?>
									<tr class ="tabela_linha history">
										<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['ID'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Tipo'];?>
'><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['ID'];?>
</label></td>
										<td><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Valor'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Estado'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Data'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['c_tab_item']->value['Tipo'];?>
</td>
									</tr>
									
									<?php } ?>	


								</tbody>
					
							</table>
						</div>

						<?php }else{ ?>
							<span class="aviso_txt">Não tem cabimentações de momento.</span>
						<?php }?>


					</div><!--end .acc_seccao_conteudo-->
		</div><!--end .acc_seccao-->




		<div class="acc_seccao">
					<a class="acc_seccao_titulo" href="#acordeao_movimentos">Histórico de movimentos</a>

					<div id="acordeao_movimentos" class="acc_seccao_conteudo">

						<?php if ($_smarty_tpl->tpl_vars['allCabs_assigned']->value!=0){?>
						
						<span class="pesquisa_all">
							  <form class="searchbox">
								  <input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.movements">
							  </form>
						</span>

						<span class="title_cabs">Cabimentação: </span>
						<div>					
							<span class="filtro_cabimentacao">
									<!--<option >Escolha uma</option>-->

									
										<select name="cab_id" id="cab_id" onchange="chooseSelection();">

										<?php  $_smarty_tpl->tpl_vars['cc_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc_tab_item']->key => $_smarty_tpl->tpl_vars['cc_tab_item']->value){
$_smarty_tpl->tpl_vars['cc_tab_item']->_loop = true;
?>

										<option value="<?php echo $_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'];?>
</option>

										<?php } ?>

										</select>

						
							</span>	
						</div>


						<?php if ($_smarty_tpl->tpl_vars['allMovements_assigned']->value!=0){?>
						
						<?php  $_smarty_tpl->tpl_vars['m_cab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m_cab']->_loop = false;
 $_smarty_tpl->tpl_vars['k_cab'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allMovements_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m_cab']->key => $_smarty_tpl->tpl_vars['m_cab']->value){
$_smarty_tpl->tpl_vars['m_cab']->_loop = true;
 $_smarty_tpl->tpl_vars['k_cab']->value = $_smarty_tpl->tpl_vars['m_cab']->key;
?>
						
						<div id="<?php echo $_smarty_tpl->tpl_vars['k_cab']->value;?>
" class="div_tabela_movements">
							
							<?php if (!$_smarty_tpl->tpl_vars['m_cab']->value){?>
							  <span class="aviso_txt">Não tem movimentos associadas a esta cabimentação.</span>
						
						    <?php }else{ ?>
							
							<table class="tabela">
								
								<thead>
									<tr class ="tabela_header" >
										<th>ID</th>
										<th>À ordem de</th>
										<th>Valor(€)</th>
										<th>Tipo</th>
										<th>Beneficiário</th>
										<th>Data</th>
									</tr>
								</thead>
								
								<tbody class="table_body">

									<?php  $_smarty_tpl->tpl_vars['m_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m_cab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m_tab_item']->key => $_smarty_tpl->tpl_vars['m_tab_item']->value){
$_smarty_tpl->tpl_vars['m_tab_item']->_loop = true;
?>
									<tr class ="tabela_linha movements">
										<td><label class=" Scrollable core_node" for='mov_core.php?mid=<?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['mid'];?>
'><?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['mid'];?>
</label></td>
										<td><?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['instituicaobeneficiaria'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['valor'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['tipo'];?>
</td>
										<?php if ($_smarty_tpl->tpl_vars['m_tab_item']->value['beneficia']=="UP"){?>
										  <td><?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['beneficia'];?>
</td>
										<?php }else{ ?>
										  <td><label class=" Scrollable core_node" for='person_core.php?nif=<?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['beneficia'];?>
'><?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['beneficia'];?>
</label></td>
										<?php }?>
										<td><?php echo $_smarty_tpl->tpl_vars['m_tab_item']->value['data'];?>
</td>
									</tr>
									
									<?php } ?>	


								</tbody>
					
							</table>
							<?php }?>
						</div>

						<?php } ?>

						<?php }?>

						<?php }else{ ?>
							<span class="aviso_txt">Não tem cabimentações associadas a este centro de custos.</span>
						<?php }?>



					</div><!--end .acc_seccao_conteudo-->
		</div><!--end .acc_seccao-->


<body onload="chooseSelection();">
	<div class="acc_seccao">
		<a class="acc_seccao_titulo" href="#acordeao_r_movimentos">Movimentos a reembolsar</a>
		
			<div id="acordeao_r_movimentos" class="acc_seccao_conteudo">
				  
				<?php if ($_smarty_tpl->tpl_vars['rMovements_array']->value){?>
				<span class="pesquisa_all">
					<form class="searchbox">
						<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.r_movements"/>
					</form>
				</span>
				<form action="../manager/reimburse_action.php" onsubmit="computeSelection('r_movements_selection', 'tabela_linha r_movements selected', 0, 1); return validateTableSelection('r_movements_selection', 'r_movements_selection_val', 'Por favor seleccione uma pessoa');" method="POST">
				<div class="div_tabela_r_movements">
					<table class="tabela">
						<thead>
							<tr class ="tabela_header" >
								<th>ID</th>
								<th>Reembolsar a (NIF)</th>
							</tr>
						</thead>
						<input type="hidden" name='r_movements_selection' id="r_movements_selection" value=""/>
						<input type="hidden" name='ccid' id="ccid_h" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
"/>
						<input type="hidden" name='ccnomecurto' id="ccid_h" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
"/>
						<tbody class="table_body">
						<?php  $_smarty_tpl->tpl_vars['rm_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rm_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rMovements_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rm_tab_item']->key => $_smarty_tpl->tpl_vars['rm_tab_item']->value){
$_smarty_tpl->tpl_vars['rm_tab_item']->_loop = true;
?>
							<tr id="r_movements_row" class ="tabela_linha r_movements" onclick="clickEvent(this, 'r_movements_row');">
								<td><label class=" Scrollable core_node" for='mov_core.php?mid=<?php echo $_smarty_tpl->tpl_vars['rm_tab_item']->value['movimento'];?>
'><?php echo $_smarty_tpl->tpl_vars['rm_tab_item']->value['movimento'];?>
</label></td>
								<td><label class=" Scrollable core_node" for='person_core.php?nif=<?php echo $_smarty_tpl->tpl_vars['rm_tab_item']->value['suportadopor'];?>
'><?php echo $_smarty_tpl->tpl_vars['rm_tab_item']->value['suportadopor'];?>
</label></td>	
							</tr>
						<?php } ?>	
						</tbody>
					</table>
					<label class="warn" id="r_movements_selection_val"></label>
				</div>
				<input type="submit" value="Reembolsado" class="button" />
				</form>
				<?php }else{ ?>
					<span class="aviso_txt trans">Não existem movimentos a reembolsar.</span>
				<?php }?>
			</div><!--end .acc_seccao_conteudo-->
		</div><!--end .acc_seccao-->
		
   </div><!--end .acordeao-->

  </fieldset><!--end .contentor_principal-->
 </div><!--end .caixa_principal-->
 
 
 <div class="core_info" id="core_popper">
	</div>
 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>