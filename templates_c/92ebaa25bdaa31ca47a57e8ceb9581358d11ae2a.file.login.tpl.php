<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-07 19:58:20
         compiled from "../templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12659665785484a34c4be679-72850154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ebaa25bdaa31ca47a57e8ceb9581358d11ae2a' => 
    array (
      0 => '../templates/login.tpl',
      1 => 1417976026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12659665785484a34c4be679-72850154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    's_user' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5484a34c4d2fa9_00702492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484a34c4d2fa9_00702492')) {function content_5484a34c4d2fa9_00702492($_smarty_tpl) {?>    <!-- login form - TODO: tear this appart and build with html only-->
<?php if ($_smarty_tpl->tpl_vars['s_user']->value) {?>
    <div id="login">
      <div class="title"><?php echo $_smarty_tpl->tpl_vars['s_user']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['s_type']->value;?>
)</div>
      <form action="../main/logout_action.php" method="post">
      <input type="submit" value="Logout" />
      </form>
    </div>
<?php } else { ?>
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
<?php }?>
<?php }} ?>
