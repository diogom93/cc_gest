<?php

set_include_path("../lib");

require_once('../includes/smarty.php');
require_once('../includes/base.php');
require_once('../database/Users.php');


$smarty->display('register.tpl');

?>