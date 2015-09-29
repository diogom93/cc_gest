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
					<fieldset>
						<legend>Informação Geral - Transferência Interna </legend>

						<ul> 
						
							<form action="../admin/trans_action.php" method="POST">


							<li><ul class="general_info">
								<li><span class="info_title" >ID: </span><span class="info_txt" name="tid"> {$pendingTrans.ID} </span></li>
								<input type="hidden" name="aval_tid" value="{$pendingTrans.ID}"/>
								<li><span class="info_title" >Valor: </span><span class="info_txt"> {$pendingTrans.Valor} €</span> </li>
								<input type="hidden" name="aval_valor" value="{$pendingTrans.Valor}"/>
								<li><span class="info_title" >Pedida por: </span><span class="info_txt Scrollable core_node" for='center_core.php?center={$pendingTrans.Destino}'> {$pendingTrans.Destino}  </span></li>
								<li><span class="info_title" >Na data de: </span><span class="info_txt"> {$pendingTrans.DataPedido} </span> </li>
								<li><span class="info_title" >Ao CC: </span><span class="info_txt  Scrollable core_node" for='center_core.php?center={$pendingTrans.Origem}'> {$pendingTrans.Origem} </span> </li>
								<li><span class="info_title" >Que aceitou na data de: </span><span class="info_txt"> {$pendingTrans.DataAceite} </span> </li>
								
							</ul>

						</ul>
						</fieldset>
						<fieldset>

								<label class="info_title" >Veredito: </label>
								<input class="field_decision" type="radio" size="10" name="veredito" id="aprovada" checked="checked" required value="Aprovada">Aprovar</br>
								<input class="field_decision" type="radio" size="10" name="veredito" id="rejeitada" value="Rejeitada">Rejeitar</br>

						<input type="submit" value="Continuar" class="botao cont" />
					</form>
					<form action="javascript:history.go(-1);" method="GET">
						<input type="submit" value="Cancelar" class="botao cancel" />
					</form>

					</fieldset>
				
				
		</div>

			<div class="core_info" id="core_popper">
	</div>



	</div><!--end .home_conteudo-->




{include file='footer.tpl'}