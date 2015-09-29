<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>CC_GEST - Gestão de Centros de Custos</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
{* additional CSS for this page only *}
{if isset($css)}
  {$css}
{/if}
{* external JS for this page only *}
{if isset($js)}
  {$js}
{/if}
</head>
<body>

  <!-- header tag -->
  <header>
    <p><a href="../">CC_Gest</a></p>
    <p>Gestão de Centros de Custos</p>
  </header>

  <!-- nav tag -->
  <nav>
    <!-- Don't show menu if user is not logged in -->
    {if $s_email}
      {include file="menu.tpl"}
    {else}
              <!-- simple menu -->
        <div id="menu">
          <ul>
          <div class="title">Menu</div>
            <li><span class='list_subtopic'><a href="../main/register.php">Registo</a></span></li>
          </ul>
        </div>
    {/if}
      {include file="login.tpl"}
  </nav>

  <!-- page content  -->
  <div id="content">

{* uncomment to show the debug console *}
{*debug*}

{include file="messages.tpl"}
{include file="errors.tpl"}
