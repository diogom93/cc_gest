<?php /* Smarty version Smarty-3.1.5, created on 2014-12-28 01:03:42
         compiled from "../templates/register_core.tpl" */ ?>
<?php /*%%SmartyHeaderCode:644467363549f48de606e49-01840716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5468e747da61d16a354920b83d13ebba0c1d758' => 
    array (
      0 => '../templates/register_core.tpl',
      1 => 1419724967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '644467363549f48de606e49-01840716',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_549f48de6f15a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549f48de6f15a')) {function content_549f48de6f15a($_smarty_tpl) {?><head>
    <script type="text/javascript" src="../js/category.js"></script>
    <script type="text/javascript" src="../js/formval.js"></script>
    <script type="text/javascript" src="../js/md5.js"></script>
    <script type="text/javascript" src="../js/utf8-encoder.js"></script>
</head>

<link rel="stylesheet" type="text/css" href="../css/register.css">

<body onload="filterSelectionInitial();">

    <div id="register">
      <div class="title">Registo</div>
      <form id="register" action="../main/register_action.php"  onSubmit="pw_gen(this, 'u_pw', 'u_pwmd5'); return validateRegister();" method="post">
        <label for="u_user">Nome</label>
        <input class="field_user" type="text" size="10" name="u_user" id="u_user" required onchange="commonCheck('u_user', 'u_user_val', true);"/>
        <label class="warn" id="u_user_val"></label>
        
        <label for="u_pw">Password</label>
        <input class="field_pw" type="password" size="10" name="u_pw" id="u_pw" required onchange="validatePwEquality('u_pw', 'u_pw2', 'u_pw_val', 'u_pw2_val');"/>
        <label class="warn" id="u_pw_val"></label>
        <input type="hidden" size="10" name="u_pwmd5" id="u_pwmd5" value=""/>
        
        <label for="u_pw2">Confirmar Password</label>
        <input class="field_pw2" type="password" size="10" name="u_pw2" id="u_pw2" required onchange="validatePwEquality('u_pw', 'u_pw2', 'u_pw_val', 'u_pw2_val');"/>
        <label class="warn" id="u_pw2_val"></label>
        
        <label for="u_email">E-mail</label>
        <input class="field_email" type="text" size="10" name="u_email" id="u_email" required onchange="validateEmail('u_email', 'u_email_val', true);"/>
        <label class="warn" id="u_email_val"></label>
        
        <label for="u_address">Morada</label>
        <input class="field_address" type="text" size="20" name="u_address" id="u_address" required onchange="commonCheck('u_address', 'u_address_val', true);"/>
        <label class="warn" id="u_address_val"></label>
        
        <label for="u_telephone">Telefone</label>
        <input class="field_telephone" type="text" size="9" name="u_telephone" id="u_telephone" required onchange="validateTelnr('u_telephone', 'u_telephone_val', true);"/>
        <label class="warn" id="u_telephone_val"></label>
        
        <label for="u_nif">Nif</label>
        <input class="field_nif" type="text" size="10" name="u_nif" id="u_nif" required onchange="validateNif('u_nif', 'u_nif_val', true);"/>
        <label class="warn" id="u_nif_val"></label>


        <label class="title_type">Tipo</label>
        <select class="field_type" id="u_type" name="u_type"  onkeyup="filterSelection();" onchange="filterSelection();">
                  <option id="filter_default" value="filtro_todos_tipos">Escolha uma</option>
                  <option value="Docente">Docente</option>
                  <option value="Investigador">Investigador</option>
                  <option value="Administrador">Administrador</option>
        </select>


        <label class="title_category" >Categoria</label>
       
        <div id="filtro_todos_tipos" class="field_category">
          <select class="u_cat" id="u_category_def">
                    <option value="filtro_todos">Depende do tipo</option>
          </select>
        </div>


        <div id="Docente" class="field_category">
          <select  class="u_cat" name="u_category_d" id="u_category_Docente" onkeyup="filterSelection();" onchange="filterSelection();">
                    <option value="Auxiliar">Auxiliar</option>
                    <option value="Convidado">Convidado</option>
                    <option value="Associado">Associado</option>
                    <option value="Catedrático">Catedrático</option>
          </select>
        </div>

        <div id="Investigador" class="field_category">
          <select class="u_cat" name="u_category_i" id="u_category_Investigador" onkeyup="filterSelection();" onchange="filterSelection();">
                    <option value="Aluno de Mestrado">Aluno de Mestrado</option>
                    <option value="Aluno de Doutoramento">Aluno de Doutoramento</option>
                    <option value="Externo">Externo</option>
          </select>
        </div>

        <div id="Administrador" class="field_category">
          <select class="u_cat" name="u_category_a" id="u_category_Administrador" onkeyup="filterSelection();" onchange="filterSelection();">
                    <option value="Financeiro">Financeiro</option>
                    <option value="Sistema">Sistema</option>
          </select>
        </div>

      
        <input type="hidden" id="sub_selection_id" name="u_category" value=""/> 
        <input type="submit" value="Registar" class="button" />

      </form>
    </div><?php }} ?>