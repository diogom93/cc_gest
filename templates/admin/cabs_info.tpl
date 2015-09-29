{include file='header.tpl'}


<link rel="stylesheet" type="text/css" href="../css/list_core.css"/>
<link rel="stylesheet" type="text/css" href="../css/analises_info.css"/>
	  
	  	  <script type="text/javascript" src="../js/jquery.js">
</script>
	  
<script type="text/javascript" src="../js/core_tips.js"></script>
<head>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					

							<form action="../admin/cabs_action.php" method="POST">
							  
					  <fieldset>
						<legend>Informação Geral - Cabimentação </legend>

						<ul>
							<li><ul class="general_info">
								<li><span class="info_title" >ID: </span><span class="info_txt" name="cid"> {$pendingCab.cid} </span></li>
								<input type="hidden" name="aval_cid" value="{$pendingCab.cid}"/>
								<li><span class="info_title" >Data: </span><span class="info_txt"> {$pendingCab.datapedido} </span> </li>
								<li><span class="info_title" >Valor: </span><span class="info_txt"> {$pendingCab.valor} €</span> </li>
								<input type="hidden" name="aval_valor" value="{$pendingCab.valor}"/>
								<li><span class="info_title" >Atividade: </span><span class="info_txt Scrollable core_node" for='activity_core.php?activity={$pendingCab.atividade}'> {$pendingCab.atividade} </span> </li>
								<li><span class="info_title" >Centro de Custos Associado: </span><span class="info_txt  Scrollable core_node" for='center_core.php?center={$pendingCab.cc}'> {$pendingCab.cc}  </span></li>
							</ul>
							{if $pendingCab.descricao}
							<li><span class="info_title" >Descrição: </span><label class="info_txt"> {$pendingCab.descricao} </label> </li>
							{/if}
						</ul>



						</ul>
						</fieldset>
						<fieldset>

								<label class="info_title" >Decisão: </label>
								<input class="field_decision" type="radio" size="10" name="decisao" id="aprovada" checked="checked" required value="Aprovada">Aprovar</br>
								<input class="field_decision" type="radio" size="10" name="decisao" id="rejeitada" value="Rejeitada">Rejeitar</br>

								<label class="info_title explanation" >Justificação: </label>
								<textarea class="field_explanation" type="text" rows="4" column="128" name="justificacao" required id="justificacao"></textarea>



						<input type="submit" value="Continuar" class="botao cont" />
					</form>
					<form action="javascript:history.go(-1);" method="GET">
						<input type="submit" value="Cancelar" class="botao cancel" />
					</form>

					</fieldset>
		</div>


	</div><!--end .home_conteudo-->

			<div class="core_info" id="core_popper">
	</div>




{include file='footer.tpl'}