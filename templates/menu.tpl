    <!-- nav menu -->
    <div id="menu">
      <div class="title">Menu</div>
      <ul>

<li><span class='list_topic'>Página Inicial</span></li>

<li><span class='list_subtopic'><a href="../main/home.php">Visitar Home</a></span></li>

<li><span class='list_topic'>Perfil</span></li>

<li><span class='list_subtopic'><a href="../main/profile.php">Visualizar o perfil</a></span></li>

{if $s_type == "Administrador"}

<li><span class='list_topic'>Administração</span></li>
			{if $s_category == "Financeiro"}
			<li><span class="list_subtopic"><a href="../admin/analises.php">Análises</a></li>
			<li><span class="list_subtopic"><a href="../admin/historico.php">Histórico</a></li>
			{/if}
  			{if $s_category == "Sistema"}
			<li><span class="list_subtopic"><a href="../admin/gestao_interna.php">Gestão Interna</a></li>
  			{/if}
{/if}


<li><span class='list_topic'>Centros de Custo</span></li>

			<li><span class="list_subtopic"><a href="../manager/center_list.php">Ver Lista</a></li>
			
			{if $ccid}
			
			<!--
			<script type='text/javascript' > 
			  //plant javascript global variable
			  window.ccid = {$ccid};
			</script>
			-->

    		<li><span class="list_sub_subtopic">
			  <form class="list_sub_subtopic_form" id="f_estado" action="../manager/state.php" method="POST">
				<input type="hidden" id="ccid" name="ccid" value="{$ccid}" />
				<input type="hidden" id="ccnomecurto" name="ccnomecurto" value="{$ccnomecurto}" >
				  <a id="a_estado" class="list_sub_subtopic_link" href="javascript:{}" onclick="document.getElementById('f_estado').submit(); return false;">
					Estado
				  </a>
				</input>
			  </form>
			</span></li>

			<li><span class="list_sub_subtopic">
			  <form class="list_sub_subtopic_form" id="f_operacoes" action="../manager/operations.php" method="POST">
				<input type="hidden" id="ccid" name="ccid" value="{$ccid}" />
				<input type="hidden" id="ccnomecurto" name="ccnomecurto" value="{$ccnomecurto}" >
				  <a id="a_operacoes" class="list_sub_subtopic_link" href="javascript:{}" onclick="document.getElementById('f_operacoes').submit(); return false;">
					Operações
				  </a>
				</input>
			  </form>
			</span></li>

			<li><span class="list_sub_subtopic">
			  <form class="list_sub_subtopic_form" id="f_consultas" action="../manager/consult.php" method="POST">
				<input type="hidden" id="ccid" name="ccid" value="{$ccid}" />
				<input type="hidden" id="ccnomecurto" name="ccnomecurto" value="{$ccnomecurto}" >
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
			{/if}




<li><span class='list_topic'>Definições</span></li>

<li><span class='list_subtopic'><a href="../main/settings.php">Alterar definições</a></span></li>


     </ul>
    </div>
