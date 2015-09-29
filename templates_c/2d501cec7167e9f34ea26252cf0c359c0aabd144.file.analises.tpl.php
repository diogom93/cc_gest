<?php /* Smarty version Smarty-3.1.5, created on 2014-12-31 00:10:13
         compiled from "../templates/admin/analises.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140485928654874362007ff4-31861485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d501cec7167e9f34ea26252cf0c359c0aabd144' => 
    array (
      0 => '../templates/admin/analises.tpl',
      1 => 1419981011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140485928654874362007ff4-31861485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548743620c4d5',
  'variables' => 
  array (
    'pendingAnalysis_array' => 0,
    'tab_item' => 0,
    'pendingCabs_array' => 0,
    'pendingRequests_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548743620c4d5')) {function content_548743620c4d5($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<head>
	<link rel="stylesheet" type="text/css" href="../css/analises.css">
	<link rel="stylesheet" type="text/css" href="../css/tabelas.css">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	  <link rel="stylesheet" type="text/css" href="../css/list_core.css"/>
	<script type="text/javascript" src="../js/table_selection.js"></script>
	<script type="text/javascript" src="../js/dropdown_table_filter.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/formval.js"></script>
	<script type="text/javascript" src="../js/table_search.js"></script>
	
<script type="text/javascript" src="../js/core_tips.js"></script>
	<title>CC_GEST - Administração</title>
</head>

<body onload="updateTableSelection();"> 
	<div class="home_conteudo">

		<fieldset>
			<legend>Pedidos pendentes</legend>
				<div class="div_filtro_e_pesquisa">
					<span class="filtro">
						<span class="texto_filtro">Filtrar por: </span>
							<select name="caixa_filtro" id="caixa_filtro_tabela" onchange="updateTableSelection();">
								<option value="filtro_todos">Todos os pedidos</option>
								<option value="filtro_cabimentacoes">Cabimentações</option>
								<option value="filtro_transferencias">Transferências Internas</option>
							</select>
					</span>
							
				
					<span class="pesquisa_cabs_trans">
							
							<form class="searchbox">
								<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha">
							</form>
							
						</span>
				</div>
				
				<form action="../admin/analises_action.php" onsubmit="computeSelection('pending_cabtr_selection', 'tabela_linha pending_cabtr selected', 0, 1); computeSelection('pending_cabtr2_selection', 'tabela_linha pending_cabtr selected', 4); return validateTableSelection('pending_cabtr_selection', 'pending_cabtr_selection_val', 'Por favor selecione um pedido.');" method="GET">		
				<div id="filtro_todos" class="secc_tabela">
				  
				  <?php if ($_smarty_tpl->tpl_vars['pendingAnalysis_array']->value){?>
					<table class="tabela">
						<thead>
							<tr class ="tabela_header" >
								<th>ID</th>
								<th>Valor (€)</th>
								<th>CC</th>
								<th>Data do Pedido</th>
								<th>Tipo</th>
							</tr>
						</thead>
						<input type="hidden" name='pending_cabtr_selection' id="pending_cabtr_selection" value=""/>
						<input type="hidden" name='pending_cabtr2_selection' id="pending_cabtr2_selection" value=""/>
						<tbody class="table_body">
							<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pendingAnalysis_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
							<tr id="pending_cabtr_row" class="tabela_linha pending_cabtr" onclick="clickEvent(this, 'pending_cabtr_row');">
								<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Valor'];?>
</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Data'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
</td>
							</tr>
							<?php } ?>	
						</tbody>
					</table>
					
				<label class="warn" id="pending_cabtr_selection_val"></label>
				<input type="submit" value="Continuar" class="button" />
				<?php }else{ ?>
					<span class="aviso_txt todos">Não existem pedidos para análise.</span>
				<?php }?>
				</div>
				</form>
				
				<form action="../admin/analises_action.php" onsubmit="computeSelection('pending_cab_selection', 'tabela_linha pending_cab selected', 0, 1); computeSelection('pending_cab2_selection', 'tabela_linha pending_cab selected', 4); return validateTableSelection('pending_cab_selection', 'pending_cab_selection_val', 'Por favor selecione uma Cabimentação.');" method="GET">
				<div id="filtro_cabimentacoes" class="secc_tabela">
					
					<?php if ($_smarty_tpl->tpl_vars['pendingCabs_array']->value){?>
					<table class="tabela">
						<thead>
							<tr class ="tabela_header" >
								<th>ID</th>
								<th>Valor</th>
								<th>CC</th>
								<th>Data do Pedido</th>
								<th>Tipo</th>
							</tr>
						</thead>
						<input type="hidden" name='pending_cabtr_selection' id="pending_cab_selection" value=""/>
						<input type="hidden" name='pending_cabtr2_selection' id="pending_cab2_selection" value=""/>
						<tbody class="table_body">
							<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pendingCabs_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
							<tr id="pending_cab_row" class="tabela_linha pending_cab" onclick="clickEvent(this, 'pending_cab_row');">
								<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Valor'];?>
</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Data'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
</td>
							</tr>
							<?php } ?>	
						</tbody>
					</table>
				<label class="warn" id="pending_cab_selection_val"></label>
				<input type="submit" value="Continuar" class="button" />
				<?php }else{ ?>
					<span class="aviso_txt trans">Não existem Cabimentações para análise.</span>
				<?php }?>
				</div>
				</form>
				
				<form action="../admin/analises_action.php"  onsubmit="computeSelection('pending_tr_selection', 'tabela_linha pending_tr selected', 0, 1); computeSelection('pending_tr2_selection', 'tabela_linha pending_tr selected', 4); return validateTableSelection('pending_tr_selection', 'pending_tr_selection_val', 'Por favor selecione uma Transferência Interna.');" method="GET">
				<div id="filtro_transferencias" class="secc_tabela">
				  
				  <?php if ($_smarty_tpl->tpl_vars['pendingRequests_array']->value){?>
					<table class="tabela">
						<thead>
							<tr class ="tabela_header" >
								<th>ID</th>
								<th>Valor</th>
								<th>CC</th>
								<th>Data do Pedido</th>
								<th>Tipo</th>
							</tr>
						</thead>
						<input type="hidden" name='pending_cabtr_selection' required id="pending_tr_selection" value=""/>
						<input type="hidden" name='pending_cabtr2_selection' required id="pending_tr2_selection" value=""/>
						<tbody class="table_body">
							<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pendingRequests_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
							<tr id="pending_tr_row" class="tabela_linha pending_tr" onclick="clickEvent(this, 'pending_tr_row');">
								<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Valor'];?>
</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Data'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
</td>
							</tr>
							<?php } ?>	
						</tbody>
					</table>
					<label class="warn" id="pending_tr_selection_val"></label>
					<input type="submit" value="Continuar" class="button" />
					
					<?php }else{ ?>
						<span class="aviso_txt trans">Não existem Transferências Internas para análise.</span>
					<?php }?>
				</div>
				</form>
		</fieldset>
	</div>
	
	<div class="core_info" id="core_popper">
	</div>

	
</body>
	  
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>