{include file='header.tpl'}

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
				  
				  {if $pendingAnalysis_array}
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
							{foreach name=table_item item=tab_item from=$pendingAnalysis_array}
							<tr id="pending_cabtr_row" class="tabela_linha pending_cabtr" onclick="clickEvent(this, 'pending_cabtr_row');">
								<td><label class=" Scrollable core_node" for='cab_core.php?xid={$tab_item.ID}&type={$tab_item.Tipo}'>{$tab_item.ID}</label></td>
								<td>{$tab_item.Valor}</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center={$tab_item.CC}'>{$tab_item.CC}</label></td>
								<td>{$tab_item.Data}</td>
								<td>{$tab_item.Tipo}</td>
							</tr>
							{/foreach}	
						</tbody>
					</table>
					
				<label class="warn" id="pending_cabtr_selection_val"></label>
				<input type="submit" value="Continuar" class="button" />
				{else}
					<span class="aviso_txt todos">Não existem pedidos para análise.</span>
				{/if}
				</div>
				</form>
				
				<form action="../admin/analises_action.php" onsubmit="computeSelection('pending_cab_selection', 'tabela_linha pending_cab selected', 0, 1); computeSelection('pending_cab2_selection', 'tabela_linha pending_cab selected', 4); return validateTableSelection('pending_cab_selection', 'pending_cab_selection_val', 'Por favor selecione uma Cabimentação.');" method="GET">
				<div id="filtro_cabimentacoes" class="secc_tabela">
					
					{if $pendingCabs_array}
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
							{foreach name=table_item item=tab_item from=$pendingCabs_array}
							<tr id="pending_cab_row" class="tabela_linha pending_cab" onclick="clickEvent(this, 'pending_cab_row');">
								<td><label class=" Scrollable core_node" for='cab_core.php?xid={$tab_item.ID}&type={$tab_item.Tipo}'>{$tab_item.ID}</label></td>
								<td>{$tab_item.Valor}</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center={$tab_item.CC}'>{$tab_item.CC}</label></td>
								<td>{$tab_item.Data}</td>
								<td>{$tab_item.Tipo}</td>
							</tr>
							{/foreach}	
						</tbody>
					</table>
				<label class="warn" id="pending_cab_selection_val"></label>
				<input type="submit" value="Continuar" class="button" />
				{else}
					<span class="aviso_txt trans">Não existem Cabimentações para análise.</span>
				{/if}
				</div>
				</form>
				
				<form action="../admin/analises_action.php"  onsubmit="computeSelection('pending_tr_selection', 'tabela_linha pending_tr selected', 0, 1); computeSelection('pending_tr2_selection', 'tabela_linha pending_tr selected', 4); return validateTableSelection('pending_tr_selection', 'pending_tr_selection_val', 'Por favor selecione uma Transferência Interna.');" method="GET">
				<div id="filtro_transferencias" class="secc_tabela">
				  
				  {if $pendingRequests_array}
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
							{foreach name=table_item item=tab_item from=$pendingRequests_array}
							<tr id="pending_tr_row" class="tabela_linha pending_tr" onclick="clickEvent(this, 'pending_tr_row');">
								<td><label class=" Scrollable core_node" for='cab_core.php?xid={$tab_item.ID}&type={$tab_item.Tipo}'>{$tab_item.ID}</label></td>
								<td>{$tab_item.Valor}</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center={$tab_item.CC}'>{$tab_item.CC}</label></td>
								<td>{$tab_item.Data}</td>
								<td>{$tab_item.Tipo}</td>
							</tr>
							{/foreach}	
						</tbody>
					</table>
					<label class="warn" id="pending_tr_selection_val"></label>
					<input type="submit" value="Continuar" class="button" />
					
					{else}
						<span class="aviso_txt trans">Não existem Transferências Internas para análise.</span>
					{/if}
				</div>
				</form>
		</fieldset>
	</div>
	
	<div class="core_info" id="core_popper">
	</div>

	
</body>
	  
{include file='footer.tpl'}