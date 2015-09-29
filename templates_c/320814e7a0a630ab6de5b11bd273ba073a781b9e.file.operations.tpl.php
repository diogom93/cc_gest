<?php /* Smarty version Smarty-3.1.5, created on 2014-12-31 01:21:25
         compiled from "../templates/manager/operations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:566619117548888c2733390-10033148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '320814e7a0a630ab6de5b11bd273ba073a781b9e' => 
    array (
      0 => '../templates/manager/operations.tpl',
      1 => 1419985236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '566619117548888c2733390-10033148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548888c2825e1',
  'variables' => 
  array (
    's_last_op' => 0,
    'ccid' => 0,
    'ccnomecurto' => 0,
    's_last_inputs' => 0,
    'activities_number' => 0,
    'activities_array' => 0,
    'ativ_tab_item' => 0,
    'allCabs_assigned' => 0,
    'infoAllCabs_array' => 0,
    'infoAllCabs_tab_item' => 0,
    'allCabs_array' => 0,
    'cc_tab_item' => 0,
    'vv_cid' => 0,
    'allCabsRemainders_array' => 0,
    'users_array' => 0,
    'tab_item' => 0,
    'me' => 0,
    'v_cid' => 0,
    'allCenters_number' => 0,
    'allCenters_array' => 0,
    'centers_tab_item' => 0,
    'allPendingProvidedTrans_number' => 0,
    'allPendingProvidedTrans_array' => 0,
    'pendingProvidedTrans_tab_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548888c2825e1')) {function content_548888c2825e1($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<head>
	  <link rel="stylesheet" type="text/css" href="../css/tabelas.css">
	  <link rel="stylesheet" type="text/css" href="../css/operations.css">
			
	  <link rel="stylesheet" type="text/css" href="../css/list_core.css"/>
	  <script type="text/javascript" src="../js/dropdown.js">
</script>
	  <script type="text/javascript" src="../js/table_selection.js">
</script>
	  <script type="text/javascript" src="../js/jquery.js">
</script>
	  <script type="text/javascript" src="../js/table_search.js">
</script>
	  
	  <script type="text/javascript" src="../js/formval.js">
</script>
	  
<script type="text/javascript" src="../js/core_tips.js"></script>

</head>

<body onload="updateSelection();">
	  <div class="conteudo">
			

			<div >					
				<span class="filtro">
				  
					<select name="caixa_filtro" id="caixa_filtro" onchange="updateSelection();">
						<?php if ($_smarty_tpl->tpl_vars['s_last_op']->value=="filtro_cabimentacao"){?>
							  <option value="filtro_cabimentacao" selected>Criar Cabimentação</option>
						<?php }else{ ?>
							  <option value="filtro_cabimentacao">Criar Cabimentação</option>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['s_last_op']->value=="filtro_fechar_cab"){?>
							  <option value="filtro_fechar_cab" selected>Fechar Cabimentação</option>
						<?php }else{ ?>
							  <option value="filtro_fechar_cab">Fechar Cabimentação</option>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['s_last_op']->value=="filtro_movimento"){?>
							  <option value="filtro_movimento" selected>Efetuar Movimento (Despesa)</option>
						<?php }else{ ?>
							  <option value="filtro_movimento">Efetuar Movimento (Despesa)</option>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['s_last_op']->value=="filtro_transf_ext"){?>
							  <option value="filtro_transf_ext" selected>Registar Transferência Externa</option>
						<?php }else{ ?>
							  <option value="filtro_transf_ext">Registar Transferência Externa</option>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['s_last_op']->value=="filtro_movimento_reembolsar"){?>
							  <option value="filtro_movimento_reembolsar" selected>Efetuar Movimento (Despesa) a Reembolsar</option>
						<?php }else{ ?>
							  <option value="filtro_movimento_reembolsar">Efetuar Movimento (Despesa) a Reembolsar</option>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['s_last_op']->value=="filtro_transferencia1"){?>
							  <option value="filtro_transferencia1" selected>Pedir Transferência Interna</option>
						<?php }else{ ?>
							  <option value="filtro_transferencia1">Pedir Transferência Interna</option>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['s_last_op']->value=="filtro_transferencia2"){?>
							  <option value="filtro_transferencia2" selected>Financiar Transferência Interna</option>
						<?php }else{ ?>
							  <option value="filtro_transferencia2">Financiar Transferência Interna</option>
						<?php }?>
						
					</select>
				</span>	
			</div>



			<div id="filtro_cabimentacao" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
</span> - Cabimentação</legend>

						<span class="pesquisa_cabs">
								
								<form class="searchbox">
									<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.cab">
								</form>
								
							</span>
						

						<form action="../manager/cabs_action.php" onsubmit="computeSelection('cab_activity_selection', 'tabela_linha cab selected', 0, 2); return validateCabInsertion();" method="POST">

						<label class="title_value" for="op_value" >Valor (€)</label>
       					<input class="field_value" type="text" size="30" name="op_value" id="op_value_cab" required value="<?php echo $_smarty_tpl->tpl_vars['s_last_inputs']->value['cab_val'];?>
" onchange="validateCurrency('op_value_cab', 'op_value_cab_val', true);"/>
						<label class="warn" id="op_value_cab_val"></label>

       					<label class="title_description" for="op_description">Descrição</label>
       					<input class="field_description" type="text" size="30" name="op_description" id="op_description_cab" value="<?php echo $_smarty_tpl->tpl_vars['s_last_inputs']->value['cab_desc'];?>
"/>
						<label class="warn" id="op_description_cab_val"></label>
						

						<?php if ($_smarty_tpl->tpl_vars['activities_number']->value!=0){?>
						
						<span class="title_activity" for="op_activity">Escolha uma atividade: </span>
						
						
						<div class="div_tabela">
							<table class="tabela" id="cab_table_activities">
								
								<thead>
									<tr class ="tabela_header" >
										<th>ID</th>
										<th>Nome</th>
										<th>Data Início</th>
										<th>Data Fim</th>
										<th>Tipo</th>
									</tr>
								</thead>
								
								
							  <input type="hidden" name='cab_activity_selection' id="cab_activity_selection" required value=""/>
							  <input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
"/>
							  <input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
"/>
								
								<tbody class="table_body">

									<?php  $_smarty_tpl->tpl_vars['ativ_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ativ_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activities_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ativ_tab_item']->key => $_smarty_tpl->tpl_vars['ativ_tab_item']->value){
$_smarty_tpl->tpl_vars['ativ_tab_item']->_loop = true;
?>
									<tr id="cab_row" class="tabela_linha cab" onclick="clickEvent(this, 'cab_row');" >
										<td><label class=" Scrollable core_node" for='activity_core.php?activity=<?php echo $_smarty_tpl->tpl_vars['ativ_tab_item']->value['aid'];?>
'><a href="../core/activity.php?activity=<?php echo $_smarty_tpl->tpl_vars['ativ_tab_item']->value['aid'];?>
"><?php echo $_smarty_tpl->tpl_vars['ativ_tab_item']->value['aid'];?>
</a></label></td>
										<td><?php echo $_smarty_tpl->tpl_vars['ativ_tab_item']->value['nome'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['ativ_tab_item']->value['datainicio'];?>
</td>
										
										<?php if ($_smarty_tpl->tpl_vars['ativ_tab_item']->value['datafim']){?>
										<td><?php echo $_smarty_tpl->tpl_vars['ativ_tab_item']->value['datafim'];?>
</td>
										
										<?php }else{ ?>
										<td>-</td>
										
										<?php }?>
										
										<td><?php echo $_smarty_tpl->tpl_vars['ativ_tab_item']->value['tipo'];?>
</td>
									</tr>
									
									<?php } ?>	

								</tbody>
					
							</table>
							<label class="warn under_table" id="cab_activity_selection_val"></label>
						</div>
						
						<?php }else{ ?>
						
						<?php }?>

						<label class="btn" for="popup_new_activity"><span class="activity" >Criar Atividade</span></label>

						<input type="submit" value="Confirmar" class="button" />
						
						</form>
						
					</fieldset>
			</div>





			<div id ="filtro_fechar_cab" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
</span> - Fechar Cabimentação</legend>
						
						<?php if ($_smarty_tpl->tpl_vars['allCabs_assigned']->value!=0){?>

						<form action="../manager/delete_cab_action.php" onsubmit="computeSelection('close_cab_selection', 'tabela_linha close_cab selected', 0, 1); return validateTableSelection('close_cab_selection', 'close_cab_activity_selection_val', 'Por favor selecione uma Cabimentação.');" method="POST">


       					<span class="title_choices" for="op_choices">Escolha uma cabimentação que pretenda fechar: </span>
						<div class="div_tabela">
							<table class="tabela">
								
								<thead>
									<tr class ="tabela_header" >
										<th>ID</th>
										<th>Valor (€)</th>
										<th>Estado</th>
										<th>Data</th>
										<th>Atividade</th>
									</tr>
								</thead>
								
							
							  <input type="hidden" name='cid' id="close_cab_selection"/>
							  <input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
"/>
							  <input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
"/>
								
								<tbody class="table_body">

									<?php  $_smarty_tpl->tpl_vars['infoAllCabs_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infoAllCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->key => $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->value){
$_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->_loop = true;
?>
									<tr id="close_cab_row" class ="tabela_linha close_cab" onclick="clickEvent(this, 'close_cab_row');">
										<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->value['cid'];?>
&type=C'><?php echo $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->value['cid'];?>
</label></td>
										<td><?php echo $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->value['valor'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->value['estado'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->value['datapedido'];?>
</td>
										<td><label class=" Scrollable core_node" for='activity_core.php?activity=<?php echo $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->value['atividade'];?>
'><?php echo $_smarty_tpl->tpl_vars['infoAllCabs_tab_item']->value['atividade'];?>
</label></td>
									</tr>
									
									<?php } ?>	


								</tbody>
					
							</table>
							<label class="warn" id="close_cab_activity_selection_val"></label>

							
						</div>

						<input type="submit" name="accept" value="Confirmar" class="button" />
						</form>
						
						<?php }else{ ?>
							<span class="aviso_txt">Não pode fechar cabimentações, visto que não tem nenhuma cabimentação aberta associada a este centro de custos.</span>
						<?php }?>
						
						
						
					</fieldset>
			</div>









			<div id = "filtro_movimento" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
</span> - Movimento (Despesa)</legend>
						
						<?php if ($_smarty_tpl->tpl_vars['allCabs_assigned']->value!=0){?>

						<form action="../manager/movements_action.php" onsubmit="computeSelection('person_selection', 'tabela_linha person selected', 0, 1); return validateMovement(); " method="POST">

						<label class="title_cabs">Escolha uma cabimentação que queira associar o movimento </label>
						<div>					
							<span class="filtro_cabimentacao">

									
										<select name="cab_id" id="cab_id_selector">

										<?php  $_smarty_tpl->tpl_vars['cc_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc_tab_item']->key => $_smarty_tpl->tpl_vars['cc_tab_item']->value){
$_smarty_tpl->tpl_vars['cc_tab_item']->_loop = true;
?>

										<option value="<?php echo $_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'];?>
" class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'];?>
&type=C'><?php echo $_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'];?>
 </option>

										<?php } ?>

										</select>
										
									<?php  $_smarty_tpl->tpl_vars['cc_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc_tab_item']->key => $_smarty_tpl->tpl_vars['cc_tab_item']->value){
$_smarty_tpl->tpl_vars['cc_tab_item']->_loop = true;
?>
										  <?php $_smarty_tpl->tpl_vars['vv_cid'] = new Smarty_variable($_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'], null, 0);?>
										  <input type="hidden" id="cab_val_<?php echo $_smarty_tpl->tpl_vars['vv_cid']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['allCabsRemainders_array']->value[$_smarty_tpl->tpl_vars['vv_cid']->value];?>
"/>
									<?php } ?>
							</span>	

						<label class="title_value" for="op_value">Valor (€)</label>
       					<input class="field_value" type="text" size="30" name="op_value" required id="op_value_mov" onchange="validateCurrency('op_value_mov', 'op_value_mov_val', true);"/>
						<label class="warn" id="op_value_mov_val"></label>

						<input type="hidden" name="op_type" value="Despesa"/>
									
						<label class="title_institution" for="op_institution">À ordem de</label>
						<input class="field_institution" type="text" size="30" name="op_institution" required id="op_institution_mov" />
						<label class="warn" id="op_institution_mov_val"></label></br>

						<label class="title_benef" for="op_benef">Beneficiário</label>

						<div class="field_benef">
						<input  type="radio" name="op_benef" required checked="checked" id="op_UP_mov" value="UP">UP</br>	
						
						
				  <?php if ('users_assigned'){?>
				  <input type="radio" name="op_benef" required id="op_person_mov" value="Outro">Outro (por favor selecione):</br></br>
				</div>
					<div class="div_tabela">
						<table class="tabela">
							<thead>
								<tr class ="tabela_header" >
									<th>NIF</th>
									<th>Nome</th>
								</tr>
							</thead>
							<input type="hidden" name='person_selection' id="person_selection" value=""/>
							<tbody class="table_body">
							<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
								<tr id="person_row" class ="tabela_linha person" onclick="clickEvent(this, 'person_row');">
								<?php if ($_smarty_tpl->tpl_vars['tab_item']->value['NIF']!=$_smarty_tpl->tpl_vars['me']->value){?>
									<td><label  class=" Scrollable core_node" for='person_core.php?nif=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['NIF'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['NIF'];?>
</label></td>
									<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Nome'];?>
</td>
								<?php }?>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<label class="warn" id="person_selection_val"></label>
					</div>
		
					<?php }else{ ?>
						<span class="aviso_txt trans">Não existem pessoas registadas no sistema.</span>
					<?php }?>


						
						<label class="warn" id="op_person_mov_val"></label>
						
						<input type="submit" value="Confirmar" class="button" />
						<input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
"/>
						<input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
"/>
						</form>
						
						<?php }else{ ?>
							<span class="aviso_txt">Não tem cabimentações abertas associadas a este centro de custos, por isso não pode efetuar movimentos.</span>
						<?php }?>
						

						
					</fieldset>
			</div>
						
						
						
						
			<div id = "filtro_transf_ext" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
</span> - Transferência Externa</legend>
						
						<label class="title_te">Registo para entrada de transferências externas</label>

						<form action="../manager/movements_action.php" onsubmit="javascript: return true;" method="POST">			
							

						<label class="title_value large" for="op_value">Valor (€)</label>
       					<input class="field_value" type="text" size="30" name="op_value" required id="op_value_te" onchange="validateCurrency('op_value_te', 'op_value_te_val', true);"/>
						<label class="warn next_to_large" id="op_value_te_val"></label>

						<input name="op_type" type="hidden" value="Transferência">
			

						<label class="title_institution large" for="op_institution">Proveniente de</label>
						<input class="field_institution" type="text" size="30" name="op_institution" required id="op_institution_te" />
						<label class="warn next_to_large" id="op_institution_te_val"></label>

						<input  type="hidden" name="op_benef" required checked="checked" id="op_UP_te" value="UP"/>
						
						<input type="submit" value="Confirmar" class="button" />
						<input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
"/>
						<input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
"/>
						</form>

						
					</fieldset>
			</div>
			
			<div id = "filtro_movimento_reembolsar" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
</span> - Movimento a Reembolsar</legend>
						
						<?php if ($_smarty_tpl->tpl_vars['allCabs_assigned']->value!=0){?>

						<form action="../manager/r_movements_action.php" onsubmit="computeSelection('r_mov_person_selection', 'tabela_linha r_mov_person selected', 0, 1); return validateRMovement(); " method="POST">

						<label class="title_cabs">Escolha uma cabimentação que queira associar o movimento </label>
						<div>					
							<span class="filtro_cabimentacao">

									
										<select name="r_mov_cab_id" id="r_mov_cab_id_selector">

										<?php  $_smarty_tpl->tpl_vars['cc_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc_tab_item']->key => $_smarty_tpl->tpl_vars['cc_tab_item']->value){
$_smarty_tpl->tpl_vars['cc_tab_item']->_loop = true;
?>

										<option value="<?php echo $_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'];?>
"  class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'];?>
&type=C'><?php echo $_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'];?>
</option>

										<?php } ?>

										</select>
										
										<?php  $_smarty_tpl->tpl_vars['cc_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc_tab_item']->key => $_smarty_tpl->tpl_vars['cc_tab_item']->value){
$_smarty_tpl->tpl_vars['cc_tab_item']->_loop = true;
?>
										  <?php $_smarty_tpl->tpl_vars['v_cid'] = new Smarty_variable($_smarty_tpl->tpl_vars['cc_tab_item']->value['cid'], null, 0);?>
										  <input type="hidden" id="r_cab_val_<?php echo $_smarty_tpl->tpl_vars['v_cid']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['allCabsRemainders_array']->value[$_smarty_tpl->tpl_vars['v_cid']->value];?>
"/>
									<?php } ?>

						
							</span>	

						<label class="title_value" for="op_r_mov_value">Valor (€)</label>
       					<input class="field_value" type="text" size="30" name="op_r_mov_value" required id="op_value_r_mov" onchange="validateCurrency('op_value_r_mov', 'op_value_r_mov_val', true);"/>
						<label class="warn" id="op_value_r_mov_val"></label>


       					<input type="hidden" name="op_r_mov_type" value="Despesa"/>

						<label class="title_institution" for="op_r_mov_institution">À ordem de</label>
						<input class="field_institution" type="text" size="30" name="op_r_mov_institution" required id="op_institution_r_mov" />
						<label class="warn" id="op_institution_r_mov_val"></label></br>
						
						<label class="title_supporter" for="op_supporter">Suportado Por (NIF)</label>
						<input class="field_supporter" type="text" size="30" name="op_supporter" required id="op_supporter_mov" onchange="validateNif('op_supporter_mov', 'op_supporter_mov_val', true);"/>
						<label class="warn" id="op_supporter_mov_val"></label>

						<label class="title_benef" for="op_r_mov_benef">Beneficiário</label>

						<div class="field_benef">
						<input  type="radio" name="op_r_mov_benef" required checked="checked" id="op_UP_r_mov" value="UP">UP</br>	
						
						
				  <?php if ('users_assigned'){?>
				  <input  type="radio" name="op_r_mov_benef" required id="op_person_r_mov" value="Outro">Outro (por favor selecione):</br></br>
				</div>
					<div class="div_tabela">
						<table class="tabela">
							<thead>
								<tr class ="tabela_header" >
									<th>NIF</th>
									<th>Nome</th>
								</tr>
							</thead>
							<input type="hidden" name='r_mov_person_selection' id="r_mov_person_selection" value=""/>
							<tbody class="table_body">
							<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
								<tr id="r_mov_person_row" class ="tabela_linha r_mov_person" onclick="clickEvent(this, 'r_mov_person_row');">
								<?php if ($_smarty_tpl->tpl_vars['tab_item']->value['NIF']!=$_smarty_tpl->tpl_vars['me']->value){?>
									<td><label class=" Scrollable core_node" for='person_core.php?nif=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['NIF'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['NIF'];?>
</label></td>
									<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Nome'];?>
</td>
								<?php }?>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<label class="warn" id="r_mov_person_selection_val"></label>
					</div>
		
					<?php }else{ ?>
						<span class="aviso_txt trans">Não existem pessoas registadas no sistema.</span>
					<?php }?>
						
						<label class="warn" id="op_person_r_mov_val"></label>
						
						<input type="submit" value="Confirmar" class="button" />
						<input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
"/>
						<input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
"/>
						</form>
						
						<?php }else{ ?>
							<span class="aviso_txt">Não tem cabimentações abertas associadas a este centro de custos, por isso não pode efetuar movimentos.</span>
						<?php }?>
					</fieldset>
			</div>


			<div id="filtro_transferencia1" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
</span> - Transferência Interna</legend>
						
						<?php if ($_smarty_tpl->tpl_vars['allCenters_number']->value!=0){?>
						
						<span class="pesquisa_trans">
								
								<form class="searchbox_trans">
									<input type="search" placeholder="Pesquisar..." class="search_text" for=".tabela_linha.trans1">
								</form>
								
							</span>

						<form action="../manager/request_trans_action.php" onsubmit="computeSelection('trans1_activity_selection', 'tabela_linha trans1 selected', 0, 1); return validateTransferRequest();" method="POST">

						<label class="title_value" for="op_value">Valor (€)</label>
       					<input class="field_value" type="text" size="30" name="op_value" required id="op_value_ti1" onchange="validateCurrency('op_value_ti1', 'op_value_ti1_val', true)";/>
						<label class="warn" id="op_value_ti1_val"></label>


       					<span class="title_choices" for="op_choices">Escolha um centro de custos ao qual deseja efetuar o pedido: </span>
						
						
						
						
						<div class="div_tabela">
							<table class="tabela" id="table_t1">
								
								<thead>
									<tr class ="tabela_header" >
										<th>ID</th>
										<th>Nome Curto</th>
										<th>Nome</th>
									</tr>
								</thead>
								
							  <input type="hidden" name='trans1_activity_selection' id="trans1_activity_selection" value=""/>
							  <input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
"/>
							  <input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
"/>
								
								<tbody class="table_body">

									<?php  $_smarty_tpl->tpl_vars['centers_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['centers_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allCenters_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['centers_tab_item']->key => $_smarty_tpl->tpl_vars['centers_tab_item']->value){
$_smarty_tpl->tpl_vars['centers_tab_item']->_loop = true;
?>
									<tr id="trans1_row" class ="tabela_linha trans1" onclick="clickEvent(this, 'trans1_row');" >
										<td><label class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['centers_tab_item']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['centers_tab_item']->value['id'];?>
</label></td>
										<td><?php echo $_smarty_tpl->tpl_vars['centers_tab_item']->value['nome'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['centers_tab_item']->value['nomecurto'];?>
</td>
									</tr>
									
									<?php } ?>	


								</tbody>
					
							</table>
							<label class="warn" id="trans1_activity_selection_val"></label>
						</div>


						<input type="submit" value="Confirmar" class="button" />
						
						</form>
										
						<?php }else{ ?>
							<span class="aviso_txt">Não pode efetuar transferências internas uma vez que não existem mais centros de custos.</span>
						<?php }?>
						
						
					</fieldset>
			</div>

			<div id ="filtro_transferencia2" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
 - Transferência Interna</legend>
						
						<?php if ($_smarty_tpl->tpl_vars['allPendingProvidedTrans_number']->value!=0){?>

						<form action="../manager/provide_trans_action.php" onsubmit="computeSelection('trans2_activity_selection', 'tabela_linha trans2 selected', 0, 1); return validateTableSelection('trans2_activity_selection', 'trans2_activity_selection_val', 'Por favor selecione uma Transferência Interna.');" method="POST">


       					<span class="title_choices" for="op_choices">Escolha uma transferência interna que pretende financiar: </span>
						<div class="div_tabela">
							<table class="tabela">
								
								<thead>
									<tr class ="tabela_header" >
										<th>ID</th>
										<th>Valor (€)</th>
										<th>Data</th>
										<th>CC associado</th>
									</tr>
								</thead>
								
								
							  <input type="hidden" name='trans2_activity_selection' id="trans2_activity_selection"/>
							  <input type="hidden" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
"/>
							  <input type="hidden" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
"/>
								
								<tbody class="table_body">

									<?php  $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allPendingProvidedTrans_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->key => $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->value){
$_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->_loop = true;
?>
									<tr id="trans2_row" class ="tabela_linha trans2" onclick="clickEvent(this, 'trans2_row');">
										<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->value['eid'];?>
&type=TI'><?php echo $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->value['eid'];?>
</label></td>
										<td><?php echo $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->value['valor'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->value['dataPedido'];?>
</td>
										<td><label class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->value['destino'];?>
'><?php echo $_smarty_tpl->tpl_vars['pendingProvidedTrans_tab_item']->value['destino'];?>
</label></td>
									</tr>
									
									<?php } ?>	


								</tbody>
					
							</table>
							<label class="warn under_table" id="trans2_activity_selection_val"></label>
							
						</div>

						<input type="submit" name="accept" value="Aceitar" class="button under_table" />
						<input type="submit" name="reject" value="Rejeitar" class="button rej under_table" />
						</form>
						
						<?php }else{ ?>
							<span class="aviso_txt">Não pode financiar transferências internas uma vez que não tem pedidos.</span>
						<?php }?>
						
						
						
					</fieldset>
			</div>


	</div><!--end .home_conteudo-->
			
			<input class="popup_state" id="popup_new_activity" type="checkbox"/>
			<div class="popup">
			  <label class="popup_background" for="popup_new_activity"></label>
			  <div class="popup_interior">
				<label class="popup_close" for="popup_new_activity">+</label>
				<h2>Nova Atividade</h2>
				  <?php echo $_smarty_tpl->getSubTemplate ('manager/activity.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
			
			
			<div class="core_info" id="core_popper">
	</div>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>