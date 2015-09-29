{include file='header.tpl'}

<head>
	<link rel="stylesheet" type="text/css" href="../css/historico.css">
	<link rel="stylesheet" type="text/css" href="../css/tabelas.css">
	  <link rel="stylesheet" type="text/css" href="../css/list_core.css"/>
	<script type="text/javascript" src="../js/dropdown_set.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/table_search.js"></script>
<script type="text/javascript" src="../js/core_tips.js"></script>
	<title>CC_GEST - Administração</title>
</head>

<body onload="updateSelection();">
	<div class="conteudo">

		<div>
			<span class="filtro">
				<select name="caixa_filtro" id="caixa_filtro" onchange="updateSelection();">
					<option value="filtro_analises">Análises encerradas</option>
					<option value="filtro_movimentos">Movimentos</option>
				</select>
			</span>
		</div>
	
		<div id="filtro_analises" class="secc">
			<fieldset>
				<legend>Análises encerradas</legend>
			
				<span class="pesquisa_analysis">
					<form class="searchbox">
						<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.analysis"/>
					</form>
				</span>
			
				<div class="div_tabela">
					<table class="tabela">
						<thead>
							<tr class="tabela_header">
								<th>Cabimentação</th>
								<th>Analista</th>
								<th>Veredito</th>
								<th>Data de decisão</th>
								<th>Tipo</th>
								<th>CC</th>
							</tr>
						</thead>
						<tbody class="table_body">
						{foreach name=table_item item=tab_item from=$closedAnalysis_array}
							<tr class="tabela_linha analysis">
								<td><label class=" Scrollable core_node" for='cab_core.php?xid={$tab_item.ID}&type={$tab_item.Tipo}'>{$tab_item.ID}</label></td>
								<td><label class=" Scrollable core_node" for='person_core.php?nif={$tab_item.Analista}'>{$tab_item.Analista}</label></td>
								<td>{$tab_item.Decisao}</td>
								<td>{$tab_item.Data}</td>
								<td>{$tab_item.Tipo}</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center={$tab_item.CC}'>{$tab_item.CC}</label></td>
							</tr>
						{/foreach}
						</tbody>
					</table>
				</div>
			</fieldset>
		</div>
		
		<div id="filtro_movimentos" class="secc">
			<fieldset>
				<legend>Movimentos</legend>
							
				<span class="pesquisa_mov">
					<form class="searchbox">
						<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.mov"/>
					</form>
				</span>
			
				<div class="div_tabela">
					<table class="tabela">
						<thead>
							<tr class="tabela_header">
								<th>ID</th>
								<th>Valor</th>
								<th>Beneficiário</th>
								<th>Tipo</th>
								<th>Cabimentação</th>
								<th>Data</th>
								<th>CC</th>
							</tr>
						</thead>
						<tbody class="table_body">
						{foreach name=table_item item=tab_item from=$allMovements_array}
							<tr class="tabela_linha mov">
								<td><label class=" Scrollable core_node" for='mov_core.php?mid={$tab_item.ID}'>{$tab_item.ID}</label></td>
								<td>{$tab_item.Valor}</td>
								{if $tab_item.Ben == "UP"}
								<td>UP</td>
								{else}
								<td>{$tab_item.Ben}</td>
								{/if}
								<td>{$tab_item.Tipo}</td>
								<td><label class=" Scrollable core_node" for='cab_core.php?xid={$tab_item.Cab}&type=C'>{$tab_item.Cab}</label></td>
								<td>{$tab_item.Data}</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center={$tab_item.CC}'>{$tab_item.CC}</label></td>
							</tr>
						{/foreach}
						</tbody>
					</table>
				</div>
			</fieldset>
		</div>
					<div class="core_info" id="core_popper">
	</div>				
	</div>
</body>

{include file='footer.tpl'}