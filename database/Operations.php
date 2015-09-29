<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

class Operations {

static function insertMovement($data, $cabimentacao, $valor, $tipo, $instituicaobeneficiaria) {
    global $dbh;
    try {

       	$stmt = $dbh->prepare("INSERT INTO movimento (data, cabimentacao, valor, tipo, instituicaobeneficiaria) VALUES (:data, :cabimentacao, :valor, :tipo, :instituicaobeneficiaria) RETURNING mid");

		$stmt->bindParam(":cabimentacao", $cabimentacao);
		$stmt->bindParam(":valor", $valor);
		$stmt->bindParam(":tipo", $tipo);
		$stmt->bindParam(":instituicaobeneficiaria", $instituicaobeneficiaria);

		if($data == null)
			$data = "now()";
			
		$stmt->bindParam(":data", $data);
		
		$stmt->execute();
		
		$mid = $stmt->fetch(PDO::FETCH_ASSOC);
		
		return $mid['mid'];

    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
		$_SESSION["s_errors"]["generic"] = "ERRO[57]: ".$errmsg;
		
		header("Location: ../index.php");
		die;
    }
  }
  
  static function deleteMovement($mid) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("DELETE FROM movimento WHERE mid = :mid");
      $stmt->bindParam(':mid', $mid);
	  
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"] = "ERRO[62]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }
  
  static function insertBenef($mid, $ben) {
    global $dbh;
    try {

       	$stmt = $dbh->prepare("INSERT INTO beneficia (movimento, beneficia) VALUES (:mid, :ben)");

		$stmt->bindParam(":mid", $mid);
		$stmt->bindParam(":ben", $ben);


		 $stmt->execute();
		 
		 return true;

    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
		$_SESSION["s_errors"]["generic"] = "ERRO[61]: ".$errmsg;
		
		return false;
    }
  }
  
  static function insertSupport($mid, $nif) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO suporta (movimento, suportadopor, reembolsado) VALUES (:mid, :nif, false)");
  		$stmt->bindParam(":mid", $mid);
	  	$stmt->bindParam(":nif", $nif);
 		  $stmt->execute();
  		return true;
    } catch(PDOException $e) {
        $errmsg = $e->getMessage();
        // parse errmsg
		    $_SESSION["s_errors"]["generic"] = "ERRO[61]: ".$errmsg;
    		return false;
    }
  }
  
  static function delSupport($mid) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("DELETE FROM suporta WHERE movimento = :mid");
  		$stmt->bindParam(":mid", $mid);
 		  $stmt->execute();
  		return true;
    } catch(PDOException $e) {
        $errmsg = $e->getMessage();
        // parse errmsg
		    $_SESSION["s_errors"]["generic"] = "ERRO[61]: ".$errmsg;
    		return false;
    }
  }
  

  static function insertCab($datapedido, $estado, $valor, $descricao, $atividade, $cc) {
    global $dbh;
    try {

       	$stmt = $dbh->prepare("INSERT INTO cabimentacao (datapedido, estado, valor, descricao, atividade, cc) VALUES (:datapedido, :estado, :valor, :descricao, :atividade, :cc)");

		$stmt->bindParam(":estado", $estado);
		$stmt->bindParam(":valor", $valor);
		$stmt->bindParam(":descricao", $descricao);
		$stmt->bindParam(":atividade", $atividade);
		$stmt->bindParam(":cc", $cc);

		if($datapedido == null)
			$datapedido = "now()";
			
		$stmt->bindParam(":datapedido", $datapedido);


		 $stmt->execute();

    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
		$_SESSION["s_errors"]["generic"][] = "ERRO[58]: ".$errmsg;
		
		header("Location: ../index.php");
		die;
    }
  }

static function insertTrans($valor) {
    global $dbh;
    try {

       	$stmt = $dbh->prepare("INSERT INTO transferenciainterna (valor) VALUES (:valor) RETURNING eid");

		$stmt->bindParam(":valor", $valor);

		 $stmt->execute();
		 
		$eid = $stmt->fetch(PDO::FETCH_ASSOC);
		
		return $eid['eid'];

    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
		$_SESSION["s_errors"]["generic"] = "ERRO[60]: ".$errmsg;
		
		return false;
    }
  }


static function insertRequestTrans($tid, $cc, $data) {
    global $dbh;
    try {

       	$stmt = $dbh->prepare("INSERT INTO pede (transferenciainterna, destino, data) VALUES (:transferenciainterna, :destino, :data)");

		$stmt->bindParam(":transferenciainterna", $tid);
		$stmt->bindParam(":destino", $cc);

		if($data == null)
			$data = "now()";
			
		$stmt->bindParam(":data", $data);


		 $stmt->execute();
		 
		 return true;

    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
		$_SESSION["s_errors"]["generic"] = "ERRO[61]: ".$errmsg;
		
		return false;
    }
  }


    static function deleteTrans($tid) {
    global $dbh;
    try {
      $sql = "DELETE FROM transferenciainterna WHERE eid = :tid";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':tid', $tid);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"] = "ERRO[62]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }


    static function deleteRequestTrans($tid) {
    global $dbh;
    try {
      $sql = "DELETE FROM providencia WHERE transferenciainterna = :tid";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':tid', $tid);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"] = "ERRO[63]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }
  



static function provideTrans($tid, $cc, $data, $estado) {
    global $dbh;
    try {

       	$stmt = $dbh->prepare("INSERT INTO providencia (transferenciainterna, origem, data, estado) VALUES (:transferenciainterna, :origem, :data, :estado)");

		$stmt->bindParam(":transferenciainterna", $tid);
		$stmt->bindParam(":origem", $cc);

		if($data == null)
			$data = "now()";
			
		$stmt->bindParam(":data", $data);
		$stmt->bindParam(":estado", $estado);


		$stmt->execute();
		
		return true;

    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
		$_SESSION["s_errors"]["generic"] = "ERRO[61]: ".$errmsg;
		
		return false;
    }
  }



static function updateTrans($tid, $data, $estado) {
    global $dbh;
    try {

       	$stmt = $dbh->prepare("UPDATE providencia SET (data,  estado) =  (:data, :estado) WHERE transferenciainterna = :eid");

		$stmt->bindParam(":eid", $tid);

		if($data == null)
			$data = "now()";
			
		$stmt->bindParam(":data", $data);
		$stmt->bindParam(":estado", $estado);


		$stmt->execute();

    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
		$_SESSION["s_errors"]["generic"] = "ERRO[61]: ".$errmsg;
		
		header("Location: ../index.php");
		die;
    }
  }



static function updateCab($cid, $estado) {
    global $dbh;
    try {

    $stmt = $dbh->prepare("UPDATE cabimentacao SET (estado) =  (:estado) WHERE cid = :cid");

    $stmt->bindParam(":cid", $cid);

    $stmt->bindParam(":estado", $estado);


    $stmt->execute();

    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
    $_SESSION["s_errors"]["generic"] = "ERRO[68]: ".$errmsg;
    
    header("Location: ../index.php");
    die;
    }
  }






}

?>