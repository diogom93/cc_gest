{include file='header.tpl'}


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
   <legend class="legenda_contentor_principal"><span class=" Scrollable core_node" for='center_core.php?center={$ccid}'>{$ccnomecurto}</span> - Consultas</legend> <!-- Interior da caixa principal com legenda, inserir acordeão -->
 
   <div class="acordeao">


   	<div class="acc_seccao">
					<a class="acc_seccao_titulo" href="#acordeao_cabimentacoes">Pedidos pendentes</a>

					<div id="acordeao_cabimentacoes" class="acc_seccao_conteudo">
						
						{if $pendingCabs_assigned != 0}

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

									{foreach name=c_table_item item=c_tab_item from=$pendingCabs_array}
									<tr class ="tabela_linha pending">
										<td><label class=" Scrollable core_node" for='cab_core.php?xid={$c_tab_item.ID}&type={$c_tab_item.Tipo}'>{$c_tab_item.ID}</label></td>
										<td>{$c_tab_item.Valor}</td>
										<td>{$c_tab_item.Data}</td>
										<td>{$c_tab_item.Tipo}</td>
										<td>{$c_tab_item.Estado}</td>
									</tr>
									
									{/foreach}	


								</tbody>
					
							</table>
							
						</div>

						{else}
							<span class="aviso_txt">Não tem cabimentações pendentes de momento.</span>
						{/if}


					</div><!--end .acc_seccao_conteudo-->
		</div><!--end .acc_seccao-->



<div class="acc_seccao">
					<a class="acc_seccao_titulo" href="#acordeao_todas_cabimentacoes">Histórico de pedidos</a>

					<div id="acordeao_todas_cabimentacoes" class="acc_seccao_conteudo">
						
						{if $infoCabs_assigned != 0}

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

									{foreach name=c_table_item item=c_tab_item from=$infoCabs_array}
									<tr class ="tabela_linha history">
										<td><label class=" Scrollable core_node" for='cab_core.php?xid={$c_tab_item.ID}&type={$c_tab_item.Tipo}'>{$c_tab_item.ID}</label></td>
										<td>{$c_tab_item.Valor}</td>
										<td>{$c_tab_item.Estado}</td>
										<td>{$c_tab_item.Data}</td>
										<td>{$c_tab_item.Tipo}</td>
									</tr>
									
									{/foreach}	


								</tbody>
					
							</table>
						</div>

						{else}
							<span class="aviso_txt">Não tem cabimentações de momento.</span>
						{/if}


					</div><!--end .acc_seccao_conteudo-->
		</div><!--end .acc_seccao-->




		<div class="acc_seccao">
					<a class="acc_seccao_titulo" href="#acordeao_movimentos">Histórico de movimentos</a>

					<div id="acordeao_movimentos" class="acc_seccao_conteudo">

						{if $allCabs_assigned != 0}
						
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

										{foreach name=cc_table_item item=cc_tab_item from=$allCabs_array}

										<option value="{$cc_tab_item.cid}">{$cc_tab_item.cid}</option>

										{/foreach}

										</select>

						
							</span>	
						</div>


						{if $allMovements_assigned != 0}
						
						{foreach name=m_table item=m_cab key=k_cab from=$allMovements_array}
						
						<div id="{$k_cab}" class="div_tabela_movements">
							
							{if not $m_cab}
							  <span class="aviso_txt">Não tem movimentos associadas a esta cabimentação.</span>
						
						    {else}
							
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

									{foreach name=m_table_item item=m_tab_item from=$m_cab}
									<tr class ="tabela_linha movements">
										<td><label class=" Scrollable core_node" for='mov_core.php?mid={$m_tab_item.mid}'>{$m_tab_item.mid}</label></td>
										<td>{$m_tab_item.instituicaobeneficiaria}</td>
										<td>{$m_tab_item.valor}</td>
										<td>{$m_tab_item.tipo}</td>
										{if $m_tab_item.beneficia == "UP"}
										  <td>{$m_tab_item.beneficia}</td>
										{else}
										  <td><label class=" Scrollable core_node" for='person_core.php?nif={$m_tab_item.beneficia}'>{$m_tab_item.beneficia}</label></td>
										{/if}
										<td>{$m_tab_item.data}</td>
									</tr>
									
									{/foreach}	


								</tbody>
					
							</table>
							{/if}
						</div>

						{/foreach}

						{/if}

						{else}
							<span class="aviso_txt">Não tem cabimentações associadas a este centro de custos.</span>
						{/if}



					</div><!--end .acc_seccao_conteudo-->
		</div><!--end .acc_seccao-->


<body onload="chooseSelection();">
	<div class="acc_seccao">
		<a class="acc_seccao_titulo" href="#acordeao_r_movimentos">Movimentos a reembolsar</a>
		
			<div id="acordeao_r_movimentos" class="acc_seccao_conteudo">
				  
				{if $rMovements_array}
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
						<input type="hidden" name='ccid' id="ccid_h" value="{$ccid}"/>
						<input type="hidden" name='ccnomecurto' id="ccid_h" value="{$ccnomecurto}"/>
						<tbody class="table_body">
						{foreach name=rm_table_item item=rm_tab_item from=$rMovements_array}
							<tr id="r_movements_row" class ="tabela_linha r_movements" onclick="clickEvent(this, 'r_movements_row');">
								<td><label class=" Scrollable core_node" for='mov_core.php?mid={$rm_tab_item.movimento}'>{$rm_tab_item.movimento}</label></td>
								<td><label class=" Scrollable core_node" for='person_core.php?nif={$rm_tab_item.suportadopor}'>{$rm_tab_item.suportadopor}</label></td>	
							</tr>
						{/foreach}	
						</tbody>
					</table>
					<label class="warn" id="r_movements_selection_val"></label>
				</div>
				<input type="submit" value="Reembolsado" class="button" />
				</form>
				{else}
					<span class="aviso_txt trans">Não existem movimentos a reembolsar.</span>
				{/if}
			</div><!--end .acc_seccao_conteudo-->
		</div><!--end .acc_seccao-->
		
   </div><!--end .acordeao-->

  </fieldset><!--end .contentor_principal-->
 </div><!--end .caixa_principal-->
 
 
 <div class="core_info" id="core_popper">
	</div>
 
{include file='footer.tpl'}