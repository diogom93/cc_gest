{include file='header.tpl'}

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
						{if $s_last_op == "filtro_cabimentacao"}
							  <option value="filtro_cabimentacao" selected>Criar Cabimentação</option>
						{else}
							  <option value="filtro_cabimentacao">Criar Cabimentação</option>
						{/if}

						{if $s_last_op == "filtro_fechar_cab"}
							  <option value="filtro_fechar_cab" selected>Fechar Cabimentação</option>
						{else}
							  <option value="filtro_fechar_cab">Fechar Cabimentação</option>
						{/if}
						
						{if $s_last_op == "filtro_movimento"}
							  <option value="filtro_movimento" selected>Efetuar Movimento (Despesa)</option>
						{else}
							  <option value="filtro_movimento">Efetuar Movimento (Despesa)</option>
						{/if}
						
						{if $s_last_op == "filtro_transf_ext"}
							  <option value="filtro_transf_ext" selected>Registar Transferência Externa</option>
						{else}
							  <option value="filtro_transf_ext">Registar Transferência Externa</option>
						{/if}
						
						{if $s_last_op == "filtro_movimento_reembolsar"}
							  <option value="filtro_movimento_reembolsar" selected>Efetuar Movimento (Despesa) a Reembolsar</option>
						{else}
							  <option value="filtro_movimento_reembolsar">Efetuar Movimento (Despesa) a Reembolsar</option>
						{/if}
						
						{if $s_last_op == "filtro_transferencia1"}
							  <option value="filtro_transferencia1" selected>Pedir Transferência Interna</option>
						{else}
							  <option value="filtro_transferencia1">Pedir Transferência Interna</option>
						{/if}
						
						{if $s_last_op == "filtro_transferencia2"}
							  <option value="filtro_transferencia2" selected>Financiar Transferência Interna</option>
						{else}
							  <option value="filtro_transferencia2">Financiar Transferência Interna</option>
						{/if}
						
					</select>
				</span>	
			</div>



			<div id="filtro_cabimentacao" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center={$ccid}'>{$ccnomecurto}</span> - Cabimentação</legend>

						<span class="pesquisa_cabs">
								
								<form class="searchbox">
									<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.cab">
								</form>
								
							</span>
						

						<form action="../manager/cabs_action.php" onsubmit="computeSelection('cab_activity_selection', 'tabela_linha cab selected', 0, 2); return validateCabInsertion();" method="POST">

						<label class="title_value" for="op_value" >Valor (€)</label>
       					<input class="field_value" type="text" size="30" name="op_value" id="op_value_cab" required value="{$s_last_inputs['cab_val']}" onchange="validateCurrency('op_value_cab', 'op_value_cab_val', true);"/>
						<label class="warn" id="op_value_cab_val"></label>

       					<label class="title_description" for="op_description">Descrição</label>
       					<input class="field_description" type="text" size="30" name="op_description" id="op_description_cab" value="{$s_last_inputs['cab_desc']}"/>
						<label class="warn" id="op_description_cab_val"></label>
						

						{if $activities_number != 0}
						
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
							  <input type="hidden" name="ccid" value="{$ccid}"/>
							  <input type="hidden" name="ccnomecurto" value="{$ccnomecurto}"/>
								
								<tbody class="table_body">

									{foreach name=ativ_table_item item=ativ_tab_item from=$activities_array}
									<tr id="cab_row" class="tabela_linha cab" onclick="clickEvent(this, 'cab_row');" >
										<td><label class=" Scrollable core_node" for='activity_core.php?activity={$ativ_tab_item.aid}'><a href="../core/activity.php?activity={$ativ_tab_item.aid}">{$ativ_tab_item.aid}</a></label></td>
										<td>{$ativ_tab_item.nome}</td>
										<td>{$ativ_tab_item.datainicio}</td>
										
										{if $ativ_tab_item.datafim}
										<td>{$ativ_tab_item.datafim}</td>
										
										{else}
										<td>-</td>
										
										{/if}
										
										<td>{$ativ_tab_item.tipo}</td>
									</tr>
									
									{/foreach}	

								</tbody>
					
							</table>
							<label class="warn under_table" id="cab_activity_selection_val"></label>
						</div>
						
						{else}
						
						{/if}

						<label class="btn" for="popup_new_activity"><span class="activity" >Criar Atividade</span></label>

						<input type="submit" value="Confirmar" class="button" />
						
						</form>
						
					</fieldset>
			</div>





			<div id ="filtro_fechar_cab" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center={$ccid}'>{$ccnomecurto}</span> - Fechar Cabimentação</legend>
						
						{if $allCabs_assigned != 0}

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
							  <input type="hidden" name="ccid" value="{$ccid}"/>
							  <input type="hidden" name="ccnomecurto" value="{$ccnomecurto}"/>
								
								<tbody class="table_body">

									{foreach name=infoAllCabs_table_item item=infoAllCabs_tab_item from=$infoAllCabs_array}
									<tr id="close_cab_row" class ="tabela_linha close_cab" onclick="clickEvent(this, 'close_cab_row');">
										<td><label class=" Scrollable core_node" for='cab_core.php?xid={$infoAllCabs_tab_item.cid}&type=C'>{$infoAllCabs_tab_item.cid}</label></td>
										<td>{$infoAllCabs_tab_item.valor}</td>
										<td>{$infoAllCabs_tab_item.estado}</td>
										<td>{$infoAllCabs_tab_item.datapedido}</td>
										<td><label class=" Scrollable core_node" for='activity_core.php?activity={$infoAllCabs_tab_item.atividade}'>{$infoAllCabs_tab_item.atividade}</label></td>
									</tr>
									
									{/foreach}	


								</tbody>
					
							</table>
							<label class="warn" id="close_cab_activity_selection_val"></label>

							
						</div>

						<input type="submit" name="accept" value="Confirmar" class="button" />
						</form>
						
						{else}
							<span class="aviso_txt">Não pode fechar cabimentações, visto que não tem nenhuma cabimentação aberta associada a este centro de custos.</span>
						{/if}
						
						
						
					</fieldset>
			</div>









			<div id = "filtro_movimento" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center={$ccid}'>{$ccnomecurto}</span> - Movimento (Despesa)</legend>
						
						{if $allCabs_assigned != 0}

						<form action="../manager/movements_action.php" onsubmit="computeSelection('person_selection', 'tabela_linha person selected', 0, 1); return validateMovement(); " method="POST">

						<label class="title_cabs">Escolha uma cabimentação que queira associar o movimento </label>
						<div>					
							<span class="filtro_cabimentacao">

									
										<select name="cab_id" id="cab_id_selector">

										{foreach name=cc_table_item item=cc_tab_item from=$allCabs_array}

										<option value="{$cc_tab_item.cid}" class=" Scrollable core_node" for='cab_core.php?xid={$cc_tab_item.cid}&type=C'>{$cc_tab_item.cid} </option>

										{/foreach}

										</select>
										
									{foreach name=cc_table_item item=cc_tab_item from=$allCabs_array}
										  {assign var=vv_cid value=$cc_tab_item.cid}
										  <input type="hidden" id="cab_val_{$vv_cid}" value="{$allCabsRemainders_array.$vv_cid}"/>
									{/foreach}
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
						
						
				  {if users_assigned}
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
							{foreach name=table_item item=tab_item from=$users_array}
								<tr id="person_row" class ="tabela_linha person" onclick="clickEvent(this, 'person_row');">
								{if $tab_item.NIF != $me}
									<td><label  class=" Scrollable core_node" for='person_core.php?nif={$tab_item.NIF}'>{$tab_item.NIF}</label></td>
									<td>{$tab_item.Nome}</td>
								{/if}
								</tr>
							{/foreach}
							</tbody>
						</table>
						<label class="warn" id="person_selection_val"></label>
					</div>
		
					{else}
						<span class="aviso_txt trans">Não existem pessoas registadas no sistema.</span>
					{/if}


						
						<label class="warn" id="op_person_mov_val"></label>
						
						<input type="submit" value="Confirmar" class="button" />
						<input type="hidden" name="ccid" value="{$ccid}"/>
						<input type="hidden" name="ccnomecurto" value="{$ccnomecurto}"/>
						</form>
						
						{else}
							<span class="aviso_txt">Não tem cabimentações abertas associadas a este centro de custos, por isso não pode efetuar movimentos.</span>
						{/if}
						

						
					</fieldset>
			</div>
						
						
						
						
			<div id = "filtro_transf_ext" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center={$ccid}'>{$ccnomecurto}</span> - Transferência Externa</legend>
						
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
						<input type="hidden" name="ccid" value="{$ccid}"/>
						<input type="hidden" name="ccnomecurto" value="{$ccnomecurto}"/>
						</form>

						
					</fieldset>
			</div>
			
			<div id = "filtro_movimento_reembolsar" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center={$ccid}'>{$ccnomecurto}</span> - Movimento a Reembolsar</legend>
						
						{if $allCabs_assigned != 0}

						<form action="../manager/r_movements_action.php" onsubmit="computeSelection('r_mov_person_selection', 'tabela_linha r_mov_person selected', 0, 1); return validateRMovement(); " method="POST">

						<label class="title_cabs">Escolha uma cabimentação que queira associar o movimento </label>
						<div>					
							<span class="filtro_cabimentacao">

									
										<select name="r_mov_cab_id" id="r_mov_cab_id_selector">

										{foreach name=cc_table_item item=cc_tab_item from=$allCabs_array}

										<option value="{$cc_tab_item.cid}"  class=" Scrollable core_node" for='cab_core.php?xid={$cc_tab_item.cid}&type=C'>{$cc_tab_item.cid}</option>

										{/foreach}

										</select>
										
										{foreach name=cc_table_item item=cc_tab_item from=$allCabs_array}
										  {assign var=v_cid value=$cc_tab_item.cid}
										  <input type="hidden" id="r_cab_val_{$v_cid}" value="{$allCabsRemainders_array.$v_cid}"/>
									{/foreach}

						
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
						
						
				  {if users_assigned}
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
							{foreach name=table_item item=tab_item from=$users_array}
								<tr id="r_mov_person_row" class ="tabela_linha r_mov_person" onclick="clickEvent(this, 'r_mov_person_row');">
								{if $tab_item.NIF != $me}
									<td><label class=" Scrollable core_node" for='person_core.php?nif={$tab_item.NIF}'>{$tab_item.NIF}</label></td>
									<td>{$tab_item.Nome}</td>
								{/if}
								</tr>
							{/foreach}
							</tbody>
						</table>
						<label class="warn" id="r_mov_person_selection_val"></label>
					</div>
		
					{else}
						<span class="aviso_txt trans">Não existem pessoas registadas no sistema.</span>
					{/if}
						
						<label class="warn" id="op_person_r_mov_val"></label>
						
						<input type="submit" value="Confirmar" class="button" />
						<input type="hidden" name="ccid" value="{$ccid}"/>
						<input type="hidden" name="ccnomecurto" value="{$ccnomecurto}"/>
						</form>
						
						{else}
							<span class="aviso_txt">Não tem cabimentações abertas associadas a este centro de custos, por isso não pode efetuar movimentos.</span>
						{/if}
					</fieldset>
			</div>


			<div id="filtro_transferencia1" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center={$ccid}'>{$ccnomecurto}</span> - Transferência Interna</legend>
						
						{if $allCenters_number != 0}
						
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
							  <input type="hidden" name="ccid" value="{$ccid}"/>
							  <input type="hidden" name="ccnomecurto" value="{$ccnomecurto}"/>
								
								<tbody class="table_body">

									{foreach name=centers_table_item item=centers_tab_item from=$allCenters_array}
									<tr id="trans1_row" class ="tabela_linha trans1" onclick="clickEvent(this, 'trans1_row');" >
										<td><label class=" Scrollable core_node" for='center_core.php?center={$centers_tab_item.id}'>{$centers_tab_item.id}</label></td>
										<td>{$centers_tab_item.nome}</td>
										<td>{$centers_tab_item.nomecurto}</td>
									</tr>
									
									{/foreach}	


								</tbody>
					
							</table>
							<label class="warn" id="trans1_activity_selection_val"></label>
						</div>


						<input type="submit" value="Confirmar" class="button" />
						
						</form>
										
						{else}
							<span class="aviso_txt">Não pode efetuar transferências internas uma vez que não existem mais centros de custos.</span>
						{/if}
						
						
					</fieldset>
			</div>

			<div id ="filtro_transferencia2" class="secc_operacoes">
					<fieldset>
						<legend><span class=" Scrollable core_node" for='center_core.php?center={$ccid}'>{$ccnomecurto} - Transferência Interna</legend>
						
						{if $allPendingProvidedTrans_number != 0}

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
							  <input type="hidden" name="ccid" value="{$ccid}"/>
							  <input type="hidden" name="ccnomecurto" value="{$ccnomecurto}"/>
								
								<tbody class="table_body">

									{foreach name=pendingProvidedTrans_table_item item=pendingProvidedTrans_tab_item from=$allPendingProvidedTrans_array}
									<tr id="trans2_row" class ="tabela_linha trans2" onclick="clickEvent(this, 'trans2_row');">
										<td><label class=" Scrollable core_node" for='cab_core.php?xid={$pendingProvidedTrans_tab_item.eid}&type=TI'>{$pendingProvidedTrans_tab_item.eid}</label></td>
										<td>{$pendingProvidedTrans_tab_item.valor}</td>
										<td>{$pendingProvidedTrans_tab_item.dataPedido}</td>
										<td><label class=" Scrollable core_node" for='center_core.php?center={$pendingProvidedTrans_tab_item.destino}'>{$pendingProvidedTrans_tab_item.destino}</label></td>
									</tr>
									
									{/foreach}	


								</tbody>
					
							</table>
							<label class="warn under_table" id="trans2_activity_selection_val"></label>
							
						</div>

						<input type="submit" name="accept" value="Aceitar" class="button under_table" />
						<input type="submit" name="reject" value="Rejeitar" class="button rej under_table" />
						</form>
						
						{else}
							<span class="aviso_txt">Não pode financiar transferências internas uma vez que não tem pedidos.</span>
						{/if}
						
						
						
					</fieldset>
			</div>


	</div><!--end .home_conteudo-->
			
			<input class="popup_state" id="popup_new_activity" type="checkbox"/>
			<div class="popup">
			  <label class="popup_background" for="popup_new_activity"></label>
			  <div class="popup_interior">
				<label class="popup_close" for="popup_new_activity">+</label>
				<h2>Nova Atividade</h2>
				  {include file='manager/activity.tpl'}
				</div>
			</div>
			
			
			<div class="core_info" id="core_popper">
	</div>



{include file='footer.tpl'}