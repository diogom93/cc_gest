{include file='header.tpl'}

<link rel="stylesheet" type="text/css" href="../css/state.css"/>

<head>
	  <title>CC_GEST - Gestão</title>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					<fieldset>
						<legend>Informação Geral</legend>

						<ul>
						
							<li><ul class="general_info">
								<li><span class="info_title" >ID: </span><span class="info_txt"> {$selected_cc_info.id} </span></li>
								<li><span class="info_title" >Nome Curto: </span><span class="info_txt"> {$selected_cc_info.nomecurto} </span> </li>
								<li><span class="info_title" >Nome: </span><span class="info_txt"> {$selected_cc_info.nome} </span> </li>
								<li><span class="info_title" >Tipo: </span><span class="info_txt"> {$selected_cc_info.tipo} </span> </li>
								<li><span class="info_title" >Orçamento: </span><span class="info_txt"> {$selected_cc_info.orcamento}  €</span> </li>
								<li><span class="info_title" >Instituição: </span><span class="info_txt"> {$selected_cc_info.instituicao} </span> </li>
								<li><span class="info_title" >Data Início: </span><span class="info_txt"> {$selected_cc_info.datainicio}  </span></li>
							</ul>
							{if $selected_cc_info.descricao}
							<li><span class="info_title" >Descrição: </span><label class="info_txt"> {$selected_cc_info.descricao} </label> </li>
							{/if}
							<span class="info_title saldos" >Saldos</span>
							<li><ul class="saldo_info">
							<li><span class="info_title" >Saldo Disponível: </span><span class="info_txt"> {$selected_cc_info.saldodisponivel}  €</span> </li>
							<li><span class="info_title" >Saldo Cativo: </span><span class="info_txt"> {$selected_cc_info.saldocativo}  €</span> </li>
							<li><span class="info_title" >Saldo Autorizado: </span><span class="info_txt"> {$selected_cc_info.saldoautorizado}  €</span> </li>
							</ul>
						
						</ul>
					</fieldset>
		</div>


	</div><!--end .home_conteudo-->




{include file='footer.tpl'}