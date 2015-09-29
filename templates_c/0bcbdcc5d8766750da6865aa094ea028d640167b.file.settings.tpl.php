<?php /* Smarty version Smarty-3.1.5, created on 2014-12-30 22:03:06
         compiled from "../templates/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1576449313549b104a5c31c8-62577616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bcbdcc5d8766750da6865aa094ea028d640167b' => 
    array (
      0 => '../templates/settings.tpl',
      1 => 1419973382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576449313549b104a5c31c8-62577616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_549b104a6bf4d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549b104a6bf4d')) {function content_549b104a6bf4d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<head>
	
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="stylesheet" type="text/css" href="../css/settings.css">
	<script type="text/javascript" src="../js/category.js"></script>
	<script type="text/javascript" src="../js/formval.js"></script>
	<script type="text/javascript" src="../js/md5.js"></script>
	<script type="text/javascript" src="../js/utf8-encoder.js"></script>
	<script type="text/javascript" src="../js/dropdown_set.js"></script>
	<title>CC_GEST</title>
</head>

<body onload="updateSelection();">
	<div class="conteudo">
	
		<div>
			<span class="filtro">
				<select name="caixa_filtro" id="caixa_filtro" onchange="updateSelection();">
					<option value="filtro_email">Alterar e-mail</option>
					<option value="filtro_password">Alterar password</option>
				</select>
			</span>
		</div>
		
		<div id= "filtro_email" class="secc">
			<fieldset>
			<form action="../main/change_email_action.php" onsubmit="return validateChangeEmail();" method="post">
		
					
				<label class="title_email_act" for="email_act">E-mail atual</label>
				<input class="field_email_act" type="text" size="30" name="email_act" id="email_act" required onchange="validateEmail('email_act', 'email_act_val', true);"/>
				<label class="warn" id="email_act_val"></label>
				
				<label class="title_email_n" for="email_n">Novo e-mail</label>
				<input class="field_email_n" type="text" size="30" name="email_n" id="email_n" required onchange="validateEmail('email_n', 'email_n_val', true);"/>
				<label class="warn" id="email_n_val"></label>
				
				<input type="submit" value="Confirmar" class="button"/>
			</form>
			</fieldset>
		</div>
		
		<div id="filtro_password" class="secc">
			<fieldset>
			<form action="../main/change_password_action.php" onsubmit="pw_gen(this, 'pass_act', 'u_pwmd5'); pw_gen(this, 'pass_n', 'u_pwnmd5'); pw_gen(this, 'pass_nr', 'u_pwnrmd5'); return validateChangePass();" method="post">
		
				
				<label class="title_pass_act" for="pass_act">Password atual</label>
				<input class="field_pass_act" type="password" size="20" name="pass_act" id="pass_act">
				<label class="warn" id="u_pwact_val"></label>
				<input type="hidden" size="10" name="u_pwmd5" id="u_pwmd5" value=""/>
				
				<label class="title_pass_n" for="pass_n">Nova password</label>
				<input class="field_pass_n" type="password" size="20" name="pass_n" id="pass_n" onchange="validatePwEquality('pass_n', 'pass_nr', 'u_pw_val', 'u_pw2_val')";>
				<label class="warn" id="u_pw_val"></label>
				<input type="hidden" size="10" name="u_pwnmd5" id="u_pwnmd5" value=""/>
				
				<label class="title_pass_nr" for="pass_nr">Repetir nova password</label>
				<input class="field_pass_nr" type="password" size="20" name="pass_nr" id="pass_nr">
				<label class="warn" id="u_pw2_val"></label>
				<input type="hidden" size="10" name="u_pwnrmd5" id="u_pwnrmd5" value=""/>
				
				<input type="submit" value="Confirmar" class="button"/>
			</form>
			</fieldset>
		</div>
	
	</div>
</body>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>