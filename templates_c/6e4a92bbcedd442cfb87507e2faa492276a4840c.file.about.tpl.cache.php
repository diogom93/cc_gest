<?php /* Smarty version Smarty-3.1.5, created on 2014-12-07 23:06:41
         compiled from "../templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19123714175484cf713d8f11-45749158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e4a92bbcedd442cfb87507e2faa492276a4840c' => 
    array (
      0 => '../templates/about.tpl',
      1 => 1323734924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19123714175484cf713d8f11-45749158',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5484cf7146b15',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484cf7146b15')) {function content_5484cf7146b15($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

 
  <h1>Protótipo MyNews</h1>

<p><b>Especificação:</b> <a href="http://web.fe.up.pt/~jlopes/doku.php/teach/sibd/prototype/" alt="Vai para página externa">Especificação do prototipo de aplicação Web MyNews</a>
</p>
<p><b>Implementação:</b> <a href="http://web.fe.up.pt/~jlopes/lib/exe/fetch.php/teach/sibd/prototype/mynews.tgz" alt="Donwload arquivo com o código">mynews.tgz</a></p>

<pre>
Current version: 1.4
Date:   Tue Dec 12 19:07:01 2011

Changes for v1.4 (2011.12.12):
1. Paginação em news/list_page.php

Changes for v1.3 (2011.12.10):
1. home page
2. pequenas melhorias no tratamento de erros (database not open)

Changes for v1.2 (2011.12.03):
1. verificar permissões de ADM em users
2. utilização do schema "news"
3. alterações de cosmética

Changes for v1.1 (2011.11.28):
1. tratamento de erros do utilizador com PHP (s_errors['generic'][] + s_erros['field])
2. tratamento de erros do utilizador com JS em author/insert_js.php
3. tratamento de erros do utilizador com atributos HTML5
4. melhoramentos no CSS

Changes for v1.0 (2011.11.23):
1. de acordo com a especificação
2. exemplos de tratamento de domínios (enumerados) e relacionamentos N->1 entre tabelas
3. mais funcionalidades implementadas: inserir, editar e remover notícias
4. melhor tratamento dos erros
5. alguns bugs retirados

Changes for v0.9 (2011.11.13)
1. adaptado do framework do A. Restivo
2. usear PDO em vez de MDB2
3. Usar um estilo à lá REST
</pre>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>