{include file='header.tpl'}

<head>
<title>CC_HUB</title>
<link rel="stylesheet" type="text/css" href="../css/center_list.css"/>
<link rel="stylesheet" type="text/css" href="../css/accordion.css"/>
<script type="text/javascript" src="../js/jquery.js">
</script>
<script type="text/javascript" src="../js/acordeao_m.js">
</script>
</head>

<div class="caixa_principal">
  <fieldset class="contentor_principal">
   <legend class="legenda_contentor_principal">Centros de Custos</legend> <!-- Interior da caixa principal com legenda, inserir acordeão -->
 
   <div class="acordeao">
	
	{foreach name=accordeon_item item=cc_item from=$cc_array}

		<div class="acc_seccao">
					<a class="acc_seccao_titulo" href="#acordeao_{$smarty.foreach.accordeon_item.iteration}"> {$cc_item.nome}</a>

					<div id="acordeao_{$smarty.foreach.accordeon_item.iteration}" class="acc_seccao_conteudo">
						<p class="nomecurto">[{$cc_item.nomecurto}]</p>
						<div class="info_geral">
							<ul class="tipo_e_instituicao">
								<li> <span class="txt_tipo" >Tipo: </span> <span class="geral_conteudo"> {$cc_item.tipo} </span> </li>
								<li> <span class="txt_instituicao" >Instituição: </span> <span class="geral_conteudo">{$cc_item.instituicao} </span></li>
							</ul>
						</div>
						
						<div class="info_saldo">
							<span class="txt_saldo">Saldo:</span>
							<ul class="saldos">
								<li> <span class="txt_disponivel" >Disponível: </span> <span class="saldo_conteudo">{$cc_item.saldodisponivel} €</span></li>
								<li> <span class="txt_autorizado" >Autorizado: </span> <span class="saldo_conteudo">{$cc_item.saldoautorizado} €</span></li>
								<li> <span class="txt_cativo" >Cativo: </span> <span class="saldo_conteudo">{$cc_item.saldocativo} €</span></li>
							</ul>
						</div>

						<!--<form action="state.php" method="POST">-->
						<!--<form action="consult.php" method="POST">-->



						<form action="state.php" method="POST">
							<input type="hidden" value="{$cc_item.id}" name="ccid" id="ccid">
							<input type="hidden" value="{$cc_item.nomecurto}" name="ccnomecurto" id="ccnomecurto">
							<input type="submit" class="button" value="Continuar" >
							<!--<button type="button" class="button">Continuar</button> -->
						</form>
					</div><!--end .acc_seccao_conteudo-->
				</div><!--end .acc_seccao-->


	{/foreach}

	
   </div><!--end .acordeao-->
  </fieldset><!--end .contentor_principal-->
 </div><!--end .caixa_principal-->


{include file='footer.tpl'}