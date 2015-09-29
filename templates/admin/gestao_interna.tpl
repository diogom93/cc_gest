{include file='header.tpl'}

<head>
	
	<link rel="stylesheet" type="text/css" href="../css/tabelas.css">
		
	  <link rel="stylesheet" type="text/css" href="../css/list_core.css"/>
	  
	  <link rel="stylesheet" type="text/css" href="../css/gestao_interna.css">
	<script type="text/javascript" src="../js/formval.js"></script>
	<script type="text/javascript" src="../js/md5.js"></script>
	<script type="text/javascript" src="../js/utf8-encoder.js"></script>
	<script type="text/javascript" src="../js/dropdown_set.js"></script>
    <script type="text/javascript" src="../js/category.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/table_selection.js"></script>
	<script type="text/javascript" src="../js/table_search.js"></script>
	
<script type="text/javascript" src="../js/core_tips.js"></script>
	<title>CC_GEST - Administração</title>
</head>
  
<body onload="updateSelection(); filterSelectionInitial();">
	<div class="conteudo">
	
			<div>					
				<span class="filtro">
					<select name="caixa_filtro" id="caixa_filtro" onchange="updateSelection();">
						<option value="filtro_criar_cc">Criar Centro de Custos</option>
						<option value="filtro_fechar_cc">Fechar Centro de Custos</option>
						<option value="filtro_adicionar_pessoal">Adicionar Pessoal</option>
						<option value="filtro_remover_pessoal">Remover Pessoal</option>
					</select>							
				</span>	
			</div>

			<div id="filtro_criar_cc" class="secc">
					<fieldset>
						<legend>Criar Centro de Custos</legend>
						
						<form action="../admin/create_cc_action.php" id="create_cc" onsubmit="computeSelection('person_selection', 'tabela_linha person selected', 0, 1); return validateCreateCC();" method="post">
							<label class="title_gestint" for="cc_nome">Nome</label>
       						<input class="field" type="text" size="30" name="cc_nome" id="cc_nome" required onchange="validateCCName('cc_nome', 'cc_nomec', true);"/>
							<label class="warn" id="cc_nome_val"></label>
							
							<label class="title_gestint" for="cc_nomec">Nome Curto</label>
							<input class="field" type="text" size="10" name="cc_nomec" id="cc_nomec" required onchange="validateCCShortName('cc_nomec', 'cc_nomec_val', true);"/>
							<label class="warn" id="cc_nomec_val"></label>
						
							<label class="title_gestint" for="cc_orc">Orçamento (€)</label>
							<input class="field" type="text" size="30" name="cc_orc" id="cc_orc" required onchange="validateCurrency('cc_orc', 'cc_orc_val', true);"/>
							<label class="warn" id="cc_orc_val"></label>
						
							<label class="title_gestint" for="cc_inst">Instituição</label>
							<input class="field" type="text" size="30" name="cc_inst" id="cc_inst" required onchange="validateInstName('cc_inst', 'cc_inst_val', true);"/>
							<label class="warn" id="cc_inst_val"></label>
							
							<label class="title_gestint" for="cc_tipo">Tipo</label>
							<div>					
								<span class="filtro">
									<select name="caixa_filtro">
										<option value="Projeto">Projeto</option>
										<option value="Estudante">Estudante</option>
										<option value="Eventos">Eventos</option>
										<option value="Pessoal">Pessoal</option>
									</select>							
								</span>	
							</div>
							<input type="hidden" id="selection_id" name="cc_type" value=""/> 
						
							<label class="title_gestint" for="cc_desc">Descrição</label>
							<input class="field_desc"type="text" size="512" name="cc_desc" id="cc_desc" required onchange="validateDesc('cc_desc', 'cc_desc_val', true);"/>
							<label class="warn" id="cc_desc_val"></label>
							
							<span class="c_end_date">
								<label class="title_end_date" for="ativ_end_date">Data de Fim</label>
									<input type="text" placeholder="aaaa" size="4" name="ativ_end_date_year" id="ativ_end_date_year" onchange="validateDateTripleField('ativ_end_date_year', 'ativ_end_date_month', 'ativ_end_date_day', 'ativ_end_date_val', false);">/<input type="text" placeholder="mm" size="2" name="ativ_end_date_month" id="ativ_end_date_month" onchange="validateDateTripleField('ativ_end_date_year', 'ativ_end_date_month', 'ativ_end_date_day', 'ativ_end_date_val', false);">/<input type="text" placeholder="dd" size="2" name="ativ_end_date_day" id="ativ_end_date_day" onchange="validateDateTripleField('ativ_end_date_year', 'ativ_send_date_month', 'ativ_end_date_day', 'ativ_end_date_val', false);">
								<label class="warn" id="ativ_end_date_val"></label>
							</span>
							
							<label class="title_gestint" for="cc_gest">Gestor</label>
							
							<span class="pesquisa_gestao cc">
								<input type="search" placeholder="Pesquisar..." class="search_text cc" id="search_data" for=".tabela_linha.person"/>
							</span>
							
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
									{foreach name=table_item item=tab_item from=$users_array}
										<tr id="person_row" class ="tabela_linha person" onclick="clickEvent(this, 'person_row');">
											<td><label class=" Scrollable core_node" for='person_core.php?nif={$tab_item.NIF}'>{$tab_item.NIF}</label></td>
											<td>{$tab_item.Nome}</td>
										</tr>
									{/foreach}
									</tbody>
								</table>
								<label class="warn" id="person_selection_val"></label>
							</div>
							
							<input type="submit" value="Confirmar" class="button" />
						</form>
					</fieldset>
			</div>

			<div id="filtro_fechar_cc" class="secc">
					<fieldset>
						<legend>Fechar Centro de Custos</legend>
						{if $centers_array}
						<span class="pesquisa_gestao">
							<form class="searchbox">
								<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.close_cc"/>
							</form>
						</span>
						
					<form action="../admin/close_cc_action.php" onsubmit="computeSelection('close_cc_selection', 'tabela_linha close_cc selected', 0, 1); return validateTableSelection('close_cc_selection', 'close_cc_selection_val', 'Por favor seleccione um Centro de Custos');" method="POST">
						<div class="div_tabela">
							<table class="tabela">
								<thead>
									<tr class ="tabela_header" >
										<th>ID</th>
										<th>Nome</th>
										<th>Gestor</th>
									</tr>
								</thead>
								<input type="hidden" name='close_cc_selection' id="close_cc_selection" value=""/>
								<tbody class="table_body">
								{foreach name=table_item item=tab_item from=$centers_array}
									<tr id="close_cc_row" class="tabela_linha close_cc" onclick="clickEvent(this, 'close_cc_row');">
										<td><label class=" Scrollable core_node" for='center_core.php?center={$tab_item.id}'>{$tab_item.id}</label></td>
										<td>{$tab_item.nome}</td>
										<td>{$tab_item.gestor}</td>
									</tr>
								{/foreach}
							</tbody>
							</table>
							<label class="warn" id="close_cc_selection_val"></label>
						</div>
						<input type="submit" value="Confirmar" class="button" />
					</form>
					{else}
						<span class="aviso_txt trans">Não existem Centros de Custos no Sistema.</span>
					{/if}
					</fieldset>
			</div>


			<div id="filtro_adicionar_pessoal" class="secc">
				<fieldset>
					<legend>Adicionar Pessoal</legend>
						{include file='register_core.tpl'}
				</fieldset>
			</div>
			
			<div id="filtro_remover_pessoal" class="secc">
				<fieldset>
				<legend>Remover Pessoal</legend>
					{if $users_array}
					<span class="pesquisa_gestao">
						<form class="searchbox">
							<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.rm_person"/>
						</form>
					</span>
					
					<form action="../admin/remove_person_action.php" onsubmit="computeSelection('rm_person_selection', 'tabela_linha rm_person selected', 0, 1); return validateTableSelection('rm_person_selection', 'rm_person_selection_val', 'Por favor seleccione uma pessoa');" method="POST">

					<div class="div_tabela">
						<table class="tabela">
							<thead>
								<tr class ="tabela_header" >
									<th>NIF</th>
									<th>Nome</th>
								</tr>
							</thead>
							<input type="hidden" name='rm_person_selection' id="rm_person_selection" value=""/>
							<tbody class="table_body">
							{foreach name=table_item item=tab_item from=$users_array}
								<tr id="rm_person_row" class ="tabela_linha rm_person" onclick="clickEvent(this, 'rm_person_row');">
								{if $tab_item.NIF != $me}
									<td><label class=" Scrollable core_node" for='person_core.php?nif={$tab_item.NIF}'>{$tab_item.NIF}</label></td>
									<td>{$tab_item.Nome}</td>
								{/if}
								</tr>
							{/foreach}
							</tbody>
						</table>
						<label class="warn" id="rm_person_selection_val"></label>
					</div>
					<input type="submit" value="Remover" class="button" />
					</form>
					{else}
						<span class="aviso_txt trans">Não existem pessoas registadas no sistema.</span>
					{/if}
				</fieldset>
			</div>
	
	</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
</body>


{include file='footer.tpl'}