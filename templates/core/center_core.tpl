
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="center_core_ul">
	
	<li><span class="member">
		<label class="core_label field">ID</label>
		<label class="core_label value">{$center.id} </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Nome</label>
		<label class="core_label value">{$center.nome} </label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Nome Curto</label>
		<label class="core_label value"> [{$center.nomecurto}]</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Orçamento</label>
		<label class="core_label value">{$center.orcamento} €</label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Instituição</label>
		<label class="core_label value">{$center.instituicao} </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Tipo</label>
		<label class="core_label value">{$center.tipo} </label>
	</span></li>
	
	{if $center.descricao}
	<li><span class="member">
		<label class="core_label field">Descrição</label>
		<label class="core_label value">{$center.descricao} </label>
	</span></li>
	{/if}
	
	<li><span class="member">
		<label class="core_label field">Saldo Disponível</label>
		<label class="core_label value">{$center.saldodisponivel} €</label>
	</span></li>
	
	{if $center.saldocativo}
	<li><span class="member">
		<label class="core_label field">Saldo Cativo</label>
		<label class="core_label value">{$center.saldocativo} €</label>
	</span></li>
	{/if}
	
	{if $center.saldoautorizado}
	<li><span class="member">
		<label class="core_label field">Saldo Autorizado</label>
		<label class="core_label value">{$center.saldoautorizado} €</label>
	</span></li>
	{/if}
	
	<li><span class="member">
		<label class="core_label field">Data de Início</label>
		<label class="core_label value">{$center.datainicio} </label>
	</span></li>
	
	{if $center.datafim}
	<li><span class="member">
		<label class="core_label field">Data de Fim</label>
		<label class="core_label value">{$center.datafim} </label>
	</span></li>
	{/if}
	
	{if $center.gestor}
	<li><span class="member">
		<label class="core_label field">Gestor</label>
		<label class="core_label value">{$center.gestor} </label>
	</span></li>
	{/if}
	
	
	</ul>
	
</div>
	
	</body>
