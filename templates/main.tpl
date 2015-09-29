{* The header file with the main banner*}
{include file='header.tpl'}
 

{* Note: Original code was dilacerated because it had css mixed into it...  ~Meira*}
<h1>CC_GEST</h1>

{if $s_type == "administrador"}

	{include file='admin/cc_admin.tpl'}

{elseif $s_type == "docente" or $s_type == "investigador"}

	{include file='manager/cc_manager.tpl'}

{else}

  <p><em>Gestão e Administração de Centros de Custos.</em></p>
  <p></br>Para utilizar a plataforma efetue login.</p>

 {/if}

{* The footer file with the address*}
{include file='footer.tpl'}