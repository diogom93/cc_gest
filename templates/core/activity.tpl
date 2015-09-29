{include file='header.tpl'}

<div class="master">
{include file='core/activity_core.tpl'}

<div class="act_buttons">

{*the order will flip with css *}
<form action="javascript:history.go(-1);" method="GET">
	<input type="submit" value="Voltar" class="botao cancel" />
</form>

{* recommendation for next activity*}
{if $recommendation}
	<form action="activity.php" method="GET">
		<input type="hidden" name="activity" value="{$recommendation}"/>
		<input type="submit" value="Atividade Semelhante" class="botao similar" />
	</form>
{/if}

</div>
</div>

{include file='footer.tpl'}
 