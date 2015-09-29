<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
  	  <script type="text/javascript" src="../js/jquery.js"></script>
	  <script type="text/javascript" src="../js/core_tips.js"></script>
  
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="movement_core_ul">
	
	<li><span class="member">
		<label class="core_label field">MID</label>
		<label class="core_label value">{$mov_info.mid}</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Valor</label>
		<label class="core_label value">{$mov_info.valor} €</label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Data</label>
		<label class="core_label value"> {$mov_info.data}</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Tipo</label>
		<label class="core_label value">{$mov_info.tipo}</label>
	</span></li>

	
	<li><span class="member">
	{if $mov_info.tipo == "Despesa"}
		<label class="core_label field">À ordem de</label>
	{else}
		<label class="core_label field">Proveniente de</label>
	{/if}
		<label class="core_label value">{$mov_info.instituicaobeneficiaria}</label>
	</span></li>
	
	{if $mov_info.tipo == "Despesa"}
	<li><span class="member">
		<label class="core_label field">Cabimentação</label>
		<label class="core_label value">{$mov_info.cabimentacao} </label>
	</span></li>
	{/if}
	
	<li><span class="member">
		<label class="core_label field">Beneficiário</label>
		{if $mov_info.beneficia}
		<label class="core_label value">{$mov_info.beneficia} </label>
		{else}
		<label class="core_label value">UP </label>
		{/if}
	</span></li>
	
	{if $r_mov_info}
	<li><span class="member">
		<label class="core_label field">Suportado por</label>
		<label class="core_label value">{$r_mov_info.suportadopor} </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Reembolsado</label>
		{if $r_mov_info.reembolsado == true}
			<label class="core_label value">Sim </label>
		{else}
			<label class="core_label value">Não </label>
		{/if}
	</span></li>
	
	{if $r_mov_info.reembolsado == true}
	<li><span class="member">
		<label class="core_label field">Data do Reembolso</label>
		<label class="core_label value">{$r_mov_info.datareembolso} </label>
	</span></li>
	{/if}
	{/if}
	
	</ul>
	
</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
	</body>
	
	</html>