<?php /* Smarty version Smarty-3.1.5, created on 2014-12-26 02:14:44
         compiled from "../templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53579262854846fd40dd9a1-41935221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '927222f66c1cabf1737d32d5161fdb6810b2fdcc' => 
    array (
      0 => '../templates/login.tpl',
      1 => 1419556478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53579262854846fd40dd9a1-41935221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54846fd41049d',
  'variables' => 
  array (
    's_name' => 0,
    's_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54846fd41049d')) {function content_54846fd41049d($_smarty_tpl) {?>    <!-- login form -->
<?php if ($_smarty_tpl->tpl_vars['s_name']->value){?>
    <div id="login">
      <div class="username">
        <p><?php echo $_smarty_tpl->tpl_vars['s_name']->value;?>
</p>
        <p class="u_type_p">[<span class="u_type_txt"><?php echo $_smarty_tpl->tpl_vars['s_type']->value;?>
</span>]</p></div>
      <form action="../main/logout_action.php" method="post">
      <input type="submit" value="Logout" class="button" />
      </form>
    </div>
<?php }else{ ?>

  <script type="text/javascript" src="../js/md5.js"></script>
   <script type="text/javascript" src="../js/utf8-encoder.js"></script>
    <div id="login">
      <div class="title">Login</div>
      <form action="../main/login_action.php" onsubmit="pw_handler(this);" method="post">
        <label for="uuser">E-mail:</label>
        <input type="text" size="10" name="uuser" id="uuser"/>
        <label for="upass">Password:</label>
        <input type="password" size="10" name="upass" id="upass"/>
        <input type="hidden" size="10" name="upassmd5" id="upassmd5" value=""/>
        <input type="submit" value="Login" class="button" />
      </form>
    </div>
<?php }?>
<?php }} ?>