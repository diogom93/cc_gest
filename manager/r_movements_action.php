<?php
	require_once('../includes/base.php');
	require_once('../database/Operations.php');

	$ccid= $_POST["ccid"];
	$ccnomecurto= $_POST["ccnomecurto"];

	$smarty->assign("ccid", $ccid);
	$smarty->assign("ccnomecurto", $ccnomecurto);

	$cabimentacao= $_POST["r_mov_cab_id"];
	$valor = $_POST["op_r_mov_value"];
	$tipo = $_POST["op_r_mov_type"];
	$instituicaobeneficiaria = $_POST["op_r_mov_institution"];
	$suportador = $_POST["op_supporter"];
	$benef_type = $_POST["op_r_mov_benef"];
	
	$mid = Operations::insertMovement(null, $cabimentacao, $valor, $tipo, $instituicaobeneficiaria);

	if($mid == null) {
		header("Location: ../index.php");
		die;
	}

	if ($benef_type == "UP") {
		$ben = null;
	} else {
		$ben = $_POST["r_mov_person_selection"];
	}
	
	if(!Operations::insertSupport($mid, $suportador)) {
		Operations::deleteMovement($mid);
		header("Location: ../index.php");
		die;
	}

	if(!Operations::insertBenef($mid, $ben)) {
		Operations::delSupport($mid);
		Operations::deleteMovement($mid);
		header("Location: ../index.php");
		die;
	}

	$_SESSION["s_messages"][] = 'Movimento efetuado com sucesso!';
	$_SESSION["s_last_op"] = "filtro_movimento_reembolsar";
	$smarty->display('manager/hidden_form.tpl');

	$ccid = null;
	$ccnomecurto = null;
?>