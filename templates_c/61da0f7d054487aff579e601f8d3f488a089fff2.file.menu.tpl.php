<?php /* Smarty version Smarty-3.1.5, created on 2014-12-28 19:04:34
         compiled from "../templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242171333549deb118b7a51-82070718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61da0f7d054487aff579e601f8d3f488a089fff2' => 
    array (
      0 => '../templates/menu.tpl',
      1 => 1419789866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242171333549deb118b7a51-82070718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_549deb119a9aa',
  'variables' => 
  array (
    's_type' => 0,
    's_category' => 0,
    'ccid' => 0,
    'ccnomecurto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549deb119a9aa')) {function content_549deb119a9aa($_smarty_tpl) {?>    <!-- nav menu -->
    <div id="menu">
      <div class="title">Menu</div>
      <ul>

<li><span class='list_topic'>Página Inicial</span></li>

<li><span class='list_subtopic'><a href="../main/home.php">Visitar Home</a></span></li>

<li><span class='list_topic'>Perfil</span></li>

<li><span class='list_subtopic'><a href="../main/profile.php">Visualizar o perfil</a></span></li>

<?php if ($_smarty_tpl->tpl_vars['s_type']->value=="Administrador"){?>

<li><span class='list_topic'>Administração</span></li>
			<?php if ($_smarty_tpl->tpl_vars['s_category']->value=="Financeiro"){?>
			<li><span class="list_subtopic"><a href="../admin/analises.php">Análises</a></li>
			<li><span class="list_subtopic"><a href="../admin/historico.php">Histórico</a></li>
			<?php }?>
  			<?php if ($_smarty_tpl->tpl_vars['s_category']->value=="Sistema"){?>
			<li><span class="list_subtopic"><a href="../admin/gestao_interna.php">Gestão Interna</a></li>
  			<?php }?>
<?php }?>


<li><span class='list_topic'>Centros de Custo</span></li>

			<li><span class="list_subtopic"><a href="../manager/center_list.php">Ver Lista</a></li>
			
			<?php if ($_smarty_tpl->tpl_vars['ccid']->value){?>
			
			<!--
			<script type='text/javascript' > 
			  //plant javascript global variable
			  window.ccid = <?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
;
			</script>
			-->

    		<li><span class="list_sub_subtopic">
			  <form class="list_sub_subtopic_form" id="f_estado" action="../manager/state.php" method="POST">
				<input type="hidden" id="ccid" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
" />
				<input type="hidden" id="ccnomecurto" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
" >
				  <a id="a_estado" class="list_sub_subtopic_link" href="javascript:{}" onclick="document.getElementById('f_estado').submit(); return false;">
					Estado
				  </a>
				</input>
			  </form>
			</span></li>

			<li><span class="list_sub_subtopic">
			  <form class="list_sub_subtopic_form" id="f_operacoes" action="../manager/operations.php" method="POST">
				<input type="hidden" id="ccid" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
" />
				<input type="hidden" id="ccnomecurto" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
" >
				  <a id="a_operacoes" class="list_sub_subtopic_link" href="javascript:{}" onclick="document.getElementById('f_operacoes').submit(); return false;">
					Operações
				  </a>
				</input>
			  </form>
			</span></li>

			<li><span class="list_sub_subtopic">
			  <form class="list_sub_subtopic_form" id="f_consultas" action="../manager/consult.php" method="POST">
				<input type="hidden" id="ccid" name="ccid" value="<?php echo $_smarty_tpl->tpl_vars['ccid']->value;?>
" />
				<input type="hidden" id="ccnomecurto" name="ccnomecurto" value="<?php echo $_smarty_tpl->tpl_vars['ccnomecurto']->value;?>
" >
				  <a id="a_consultas" class="list_sub_subtopic_link" href="javascript:{}" onclick="document.getElementById('f_consultas').submit(); return false;">
					Consultas
				  </a>
				</input>
			  </form>
			</span></li>

			<!--
			<script type="text/javascript" src="../js/jquery.js">
			</script>
			  <script type="text/javascript" src="../js/submenu.js">
			</script>
			-->
			<?php }?>




<li><span class='list_topic'>Definições</span></li>

<li><span class='list_subtopic'><a href="../main/settings.php">Alterar definições</a></span></li>


     </ul>
    </div>
<?php }} ?>