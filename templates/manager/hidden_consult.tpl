
<body onload="javascript:document.getElementById('secret_form').submit();" >
	<form id="secret_form" method="POST" action="../manager/consult.php">
		<input type="hidden" name="ccid" value="{$ccid}" />
		<input type="hidden" name="ccnomecurto" value="{$ccnomecurto}" />
	</form>
	
</body>