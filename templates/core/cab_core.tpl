<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/list_core.css" />
  	  <script type="text/javascript" src="../js/jquery.js"></script>
	  <script type="text/javascript" src="../js/core_tips.js"></script>
  
</head>
	
	<body class="core_body">
	<div class="core_info" >
	
	<ul id="cab_core_ul">
	
	<li><span class="member">
		<label class="core_label field">CID</label>
		<label class="core_label value">{$cab.cid} </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Data do Pedido</label>
		<label class="core_label value">{$cab.datapedido} </label>
	</span></li>

	<li><span class="member">
		<label class="core_label field">Estado</label>
		<label class="core_label value"> {$cab.estado}</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Valor</label>
		<label class="core_label value">{$cab.valor} €</label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">Gasto | Cativo</label>
		<label class="core_label value">{$spent} | {$captive} €</label>
	</span></li>

	{if $cab.descricao}
	<li><span class="member">
		<label class="core_label field">Descrição</label>
		<label class="core_label value">{$cab.descricao} </label>
	</span></li>
	{/if}
	
	<li><span class="member">
		<label class="core_label field">Atividade</label>
		<label class="core_label value">{$cab.atividade} </label>
	</span></li>
	
	<li><span class="member">
		<label class="core_label field">CC</label>
		<label class="core_label value">{$cab.cc} </label>
	</span></li>
	
	</ul>
	
</div>
	
	<div class="core_info" id="core_popper">
	</div>
	
	</body>
	
	</html>