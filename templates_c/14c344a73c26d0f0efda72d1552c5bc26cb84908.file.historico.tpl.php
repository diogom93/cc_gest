<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 23:58:51
         compiled from "../templates/admin/historico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:456886609549ae860a88131-50602446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14c344a73c26d0f0efda72d1552c5bc26cb84908' => 
    array (
      0 => '../templates/admin/historico.tpl',
      1 => 1419980328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '456886609549ae860a88131-50602446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_549ae860bd9ed',
  'variables' => 
  array (
    'closedAnalysis_array' => 0,
    'tab_item' => 0,
    'allMovements_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549ae860bd9ed')) {function content_549ae860bd9ed($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
						<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['closedAnalysis_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
							<tr class="tabela_linha analysis">
								<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
</label></td>
								<td><label class=" Scrollable core_node" for='person_core.php?nif=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Analista'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Analista'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Decisao'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Data'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
</label></td>
							</tr>
						<?php } ?>
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
						<?php  $_smarty_tpl->tpl_vars['tab_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allMovements_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->key => $_smarty_tpl->tpl_vars['tab_item']->value){
$_smarty_tpl->tpl_vars['tab_item']->_loop = true;
?>
							<tr class="tabela_linha mov">
								<td><label class=" Scrollable core_node" for='mov_core.php?mid=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['ID'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Valor'];?>
</td>
								<?php if ($_smarty_tpl->tpl_vars['tab_item']->value['Ben']=="UP"){?>
								<td>UP</td>
								<?php }else{ ?>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Ben'];?>
</td>
								<?php }?>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Tipo'];?>
</td>
								<td><label class=" Scrollable core_node" for='cab_core.php?xid=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Cab'];?>
&type=C'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Cab'];?>
</label></td>
								<td><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['Data'];?>
</td>
								<td><label class=" Scrollable core_node" for='center_core.php?center=<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
'><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['CC'];?>
</label></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</fieldset>
		</div>
					<div class="core_info" id="core_popper">
	</div>				
	</div>
</body>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>