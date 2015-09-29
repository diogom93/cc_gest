<?php /* Smarty version Smarty-3.1.5, created on 2014-12-07 23:11:35
         compiled from "../templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11173624375484ce8c1e1ad9-02965036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927222f66c1cabf1737d32d5161fdb6810b2fdcc' => 
    array (
      0 => '../templates/login.tpl',
      1 => 1417990263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11173624375484ce8c1e1ad9-02965036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5484ce8c208df',
  'variables' => 
  array (
    's_user' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484ce8c208df')) {function content_5484ce8c208df($_smarty_tpl) {?>    <!-- login form -->
<?php if ($_smarty_tpl->tpl_vars['s_user']->value){?>
    <div id="login">
      <div class="title"><?php echo $_smarty_tpl->tpl_vars['s_user']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['s_type']->value;?>
)</div>
      <form action="../main/logout_action.php" method="post">
      <input type="submit" value="Logout" />
      </form>
    </div>
<?php }else{ ?>
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