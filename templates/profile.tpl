{include file='header.tpl'}

<link rel="stylesheet" type="text/css" href="../css/state.css"/>

<head>
	  <title>CC_GEST - Perfil</title>
  </head>
  
	<div class="conteudo">

		<div class="secc_info">
					<fieldset>
						<legend>Informação Pessoal</legend>

						<ul>
						
							<li><ul class="general_info">
								<li><span class="info_title" >NIF: </span><span class="info_txt"> {$user.nif} </span></li>
								<li><span class="info_title" >Nome: </span><span class="info_txt"> {$user.nome} </span> </li>
								<li><span class="info_title" >E-mail: </span><span class="info_txt"> {$user.email} </span> </li>
								<li><span class="info_title" >Morada: </span><span class="info_txt"> {$user.morada} </span> </li>
								<li><span class="info_title" >Telefone: </span><span class="info_txt"> {$user.telefone}</span> </li>
								<li><span class="info_title" >Tipo: </span><span class="info_txt"> {$user.tipo} </span> </li>
								<li><span class="info_title" >Categoria: </span><span class="info_txt"> {$user.categoria}  </span></li>
							</ul>

							</ul>

					</fieldset>
		</div>


	</div><!--end .home_conteudo-->




{include file='footer.tpl'}