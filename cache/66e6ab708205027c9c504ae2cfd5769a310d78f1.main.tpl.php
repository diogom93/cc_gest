<?php /*%%SmartyHeaderCode:18989431535484ce8c0deb88-71621104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66e6ab708205027c9c504ae2cfd5769a310d78f1' => 
    array (
      0 => '../templates/main.tpl',
      1 => 1417978974,
      2 => 'file',
    ),
    '75a619664980ef7178e07f2c499692ae2bd0ad70' => 
    array (
      0 => '../templates/header.tpl',
      1 => 1417988522,
      2 => 'file',
    ),
    '927222f66c1cabf1737d32d5161fdb6810b2fdcc' => 
    array (
      0 => '../templates/login.tpl',
      1 => 1417990263,
      2 => 'file',
    ),
    'bfe4725ae38b3c1ca55f1dc2f9f71e5e75db4ce4' => 
    array (
      0 => '../templates/messages.tpl',
      1 => 1417988719,
      2 => 'file',
    ),
    'e2eac13291a77276b65b9b907b2ae160c0f3f2e3' => 
    array (
      0 => '../templates/errors.tpl',
      1 => 1417990210,
      2 => 'file',
    ),
    'd83861b4e61683aaed4f62345d962b2bdc58429f' => 
    array (
      0 => '../templates/footer.tpl',
      1 => 1417965587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18989431535484ce8c0deb88-71621104',
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5484d1acdf115',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484d1acdf115')) {function content_5484d1acdf115($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8" />
  <title>CC_GEST - Gestão de Centros de Custos</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
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
              <!-- login form -->
    <div id="login">
      <div class="title">Login</div>
      <form action="../main/login_action.php" method="post">
        <label for="uuser">E-mail:</label>
        <input type="text" size="10" name="uuser" id="uuser"/>
        <label for="upass">Password:</label>
        <input type="password" size="10" name="upass" id="upass"/>
        <input type="submit" value="Login" class="button" />
      </form>
    </div>

  </nav>

  <!-- page content  -->
  <div id="content">

  <!-- warning and notification messages -->
  <div id="messages">
  </div>

  <!-- error messages -->
  <div id="errors">
	
	<p>Errors: </p>
	
  </div>


 
  <h1>CC_GEST</h1>

  <p><em>Gestão e Administração de Centros de Custos.</em></p>
  <p></br>Para utilizar a plataforma efetue login.</p>
 
  </div>   <!-- page content -->

  <!-- footer tag -->
  <footer>
    <p class="right"><a href="../main/about.php">MIEEC - SIBD - Grupo 11 - CC_Gest</a> (c) 2014</p>
  </footer>

</body>
</html>
<?php }} ?>