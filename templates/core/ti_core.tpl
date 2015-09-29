<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
  	  <script type="text/javascript" src="../js/jquery.js"></script>
	  <script type="text/javascript" src="../js/core_tips.js"></script>
  
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="ti_core_ul">
	
	<li><span class="member">
		<label class="core_label field">TID</label>
		<label class="core_label value">{$trans.ID} </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Valor</label>
		<label class="core_label value">{$trans.Valor} €</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Pedida por</label>
		<label class="core_label value">{$trans.Destino} </label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Na data de</label>
		<label class="core_label value"> {$trans.DataPedido}</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Ao CC</label>
		<label class="core_label value">{$trans.Origem} €</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Estado</label>
		<label class="core_label value">{$trans.Estado}</label>
	</span></li>
	
	{if $trans.DataAceite}
	<li><span class="member">
		<label class="core_label field">Ultima Atualização</label>
		<label class="core_label value">{$trans.DataAceite} </label>
	</span></li>
	{/if}
	
	</ul>
	
</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
	</body>
	
	</html>