<?php /* Smarty version Smarty-3.1.5, created on 2014-12-31 00:36:11
         compiled from "../templates/admin/gestao_interna.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15354845548b01e46d1088-21243296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caae7c4f3fb782f93889a02791abcfb4eed2e663' => 
    array (
      0 => '../templates/admin/gestao_interna.tpl',
      1 => 1419982564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15354845548b01e46d1088-21243296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_548b01e46e6c0',
  'variables' => 
  array (
    'users_array' => 0,
    'tab_item' => 0,
    'centers_array' => 0,
    'me' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548b01e46e6c0')) {function content_548b01e46e6c0($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						
						<form action="../admin/create_cc_action.php" id="create_cc" onsubmit="computeSelection('person_selection', 'tabela_linha person selected', 0); return validateCreateCC();" method="post">
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
									<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
										<tr id="person_row" class ="tabela_linha person" onclick="clickEvent(this, 'person_row');">
											<td><label class=" Scrollable core_node" for='person_core.php?nif=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['NIF'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['NIF'];?>
</label></td>
											<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Nome'];?>
</td>
										</tr>
									<?php } ?>
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
						<?php if ($_smarty_tpl->tpl_vars['centers_array']->value){?>
						<span class="pesquisa_gestao">
							<form class="searchbox">
								<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.close_cc"/>
							</form>
						</span>
						
					<form action="../admin/close_cc_action.php" onsubmit="computeSelection('close_cc_selection', 'tabela_linha close_cc selected', 0); return validateTableSelection('close_cc_selection', 'close_cc_selection_val', 'Por favor seleccione um Centro de Custos');" method="POST">
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
								<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['centers_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
									<tr id="close_cc_row" class="tabela_linha close_cc" onclick="clickEvent(this, 'close_cc_row');">
										<td><label class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['id'];?>
</label></td>
										<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['nome'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['gestor'];?>
</td>
									</tr>
								<?php } ?>
							</tbody>
							</table>
							<label class="warn" id="close_cc_selection_val"></label>
						</div>
						<input type="submit" value="Confirmar" class="button" />
					</form>
					<?php }else{ ?>
						<span class="aviso_txt trans">Não existem Centros de Custos no Sistema.</span>
					<?php }?>
					</fieldset>
			</div>


			<div id="filtro_adicionar_pessoal" class="secc">
				<fieldset>
					<legend>Adicionar Pessoal</legend>
						<?php echo $_smarty_tpl->getSubTemplate ('register_core.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</fieldset>
			</div>
			
			<div id="filtro_remover_pessoal" class="secc">
				<fieldset>
				<legend>Remover Pessoal</legend>
					<?php if ($_smarty_tpl->tpl_vars['users_array']->value){?>
					<span class="pesquisa_gestao">
						<form class="searchbox">
							<input type="search" placeholder="Pesquisar..." class="search_text" id="search_data" for=".tabela_linha.rm_person"/>
						</form>
					</span>
					
					<form action="../admin/remove_person_action.php" onsubmit="computeSelection('rm_person_selection', 'tabela_linha rm_person selected', 0); return validateTableSelection('rm_person_selection', 'rm_person_selection_val', 'Por favor seleccione uma pessoa');" method="POST">

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
							<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
								<tr id="rm_person_row" class ="tabela_linha rm_person" onclick="clickEvent(this, 'rm_person_row');">
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
						<label class="warn" id="rm_person_selection_val"></label>
					</div>
					<input type="submit" value="Remover" class="button" />
					</form>
					<?php }else{ ?>
						<span class="aviso_txt trans">Não existem pessoas registadas no sistema.</span>
					<?php }?>
				</fieldset>
			</div>
	
	</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
</body>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>