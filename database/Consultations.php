<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

class Consultations {

  static function getPendingCabs($id) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT cid, valor, atividade, datapedido FROM cabimentacao WHERE cc=:id and estado='Em Analise'");
        
        
        $stmt->bindParam(":id", $id);


        $stmt->execute();
        // get next row as an array indexed by column name
        

        while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);
                    
                    $valor = number_format($valor, 2, '.', ' ');

                    $tab_item = array("cid" => $cid, "valor" => $valor, "atividade" => $atividade, "datapedido" => $datapedido);


                    $result[] = $tab_item;
                }


        return ($result);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[11]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }

  static function getAllInfoCab($cid)
  {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT * FROM cabimentacao WHERE cid=:cid");
        
        $stmt->bindParam(":cid", $cid);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return ($result);

    }
    catch(PDOException $e) {
        return false;
    }
  }


static function getAllOpenCabs($id) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT cid, valor FROM cabimentacao WHERE cc=:id AND estado='Aberta'");
        
        
        $stmt->bindParam(":id", $id);


        $stmt->execute();
        // get next row as an array indexed by column name
        

        while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);

                    $tab_item = array("cid" => $cid, "valor" => $valor);

                    $result[] = $tab_item;
                }


        return ($result);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[12]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }
  
static function getAllCabs($id) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT cid FROM cabimentacao WHERE cc=:id");
        
        
        $stmt->bindParam(":id", $id);


        $stmt->execute();
        // get next row as an array indexed by column name
        

        while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);

                    $tab_item = array("cid" => $cid);

                    $result[] = $tab_item;
                }


        return ($result);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[12]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }


static function getInfoAllCabs($id) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT * FROM cabimentacao WHERE cc=:id");
        
        
        $stmt->bindParam(":id", $id);


        $stmt->execute();
        // get next row as an array indexed by column name
        

        while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);

                    $valor = number_format($valor, 2, '.', ' ');

                    $tab_item = array("cid" => $cid, "datapedido" => $datapedido, "estado" => $estado,  "valor" => $valor, "descricao" => $descricao, "atividade" => $atividade, "cc" => $cc) ;

                    $result[] = $tab_item;
                }


        return ($result);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[9]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }

  static function getInfoAllOpenCabs($id) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT * FROM cabimentacao WHERE cc=:id AND estado='Aberta'");
        
        
        $stmt->bindParam(":id", $id);


        $stmt->execute();
        // get next row as an array indexed by column name
        

        while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);

                    $valor = number_format($valor, 2, '.', ' ');

                    $tab_item = array("cid" => $cid, "datapedido" => $datapedido, "estado" => $estado,  "valor" => $valor, "descricao" => $descricao, "atividade" => $atividade, "cc" => $cc) ;

                    $result[] = $tab_item;
                }


        return ($result);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[9]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }



 static function getAllMovements($cid) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT mid,
                                instituicaobeneficiaria,
                                valor,
                                tipo,
                                data,
                                beneficia
                              FROM movimento
                              JOIN beneficia
                                ON movimento.mid = beneficia.movimento
                              WHERE cabimentacao=:cid");
        
        
        $stmt->bindParam(':cid', $cid);


        $stmt->execute();
        // get next row as an array indexed by column name
        

        while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);
                    
                    $valor = number_format($valor, 2, '.', ' ');
                    
                    if( $beneficia == null)
                      $beneficia = 'UP';

                    $tab_item = array("mid" => $mid, "instituicaobeneficiaria" => $instituicaobeneficiaria, "valor" => $valor, "tipo" => $tipo, "data" => $data, "beneficia" => $beneficia);


                    $result[] = $tab_item;
                }


        return ($result);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[13]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }

 
  static function getAllPendingProvidedTrans($ccid) {
    global $dbh;

    try {
	
      //only from open CC's
       $stmt = $dbh->prepare("SELECT eid, valor, pede.destino, pede.data as datapedido, centrodecustos.nomecurto
                              FROM transferenciainterna
                                JOIN pede ON pede.transferenciainterna = transferenciainterna.eid
                                JOIN providencia ON providencia.transferenciainterna = transferenciainterna.eid
                                JOIN centrodecustos ON pede.destino = centrodecustos.id

                              WHERE estado = 'Pendente' AND origem=:ccid AND aberto='TRUE'");
       
        $stmt->bindParam(":ccid", $ccid);


        $stmt->execute();
        // get next row as an array indexed by column name
        

        while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);

                    $tab_item = array("eid" => $eid, "valor" => $valor, "dataPedido" => $datapedido, "destino" => $destino);

                    $result[] = $tab_item;
                }


        return ($result);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[61]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }

  static function reimbursed($mid) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("UPDATE suporta SET reembolsado=true, datareembolso=:data WHERE movimento = :mid");
      $data = "now()";
      $stmt->bindParam(":mid", $mid);
      $stmt->bindParam(":data", $data);
      $stmt->execute();
      return true;
    }
    catch (PDOException $e)
    {
      $errmsg = $e->getMessage();
      // parse errmsg
      $_SESSION["s_errors"]["generic"] = "ERRO[161]: ".$errmsg;
      return false;
    }
  }

  static function getRMovements($ccid) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT
                                  suporta.movimento,
                                  suporta.suportadopor
                                FROM suporta
                                JOIN movimento
                                  ON movimento.mid = suporta.movimento 
                                JOIN cabimentacao
                                  ON movimento.cabimentacao = cabimentacao.cid
                                WHERE reembolsado=false AND cabimentacao.cc = :ccid");

      $stmt->bindParam(':ccid', $ccid);

      $stmt->execute();
      
      while ($table_row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($table_row, EXTR_OVERWRITE);
        $valor = number_format($valor, 2, '.', ' ');
        $tab_item = array("movimento" => $movimento, "suportadopor" => $suportadopor);
        $result[] = $tab_item;
      }
      
      return ($result);
    } catch (PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $_SESSION["s_errors"]["generic"] = "ERRO[162]: ".$errmsg;
      return false;
    }
  }

}

  ?>