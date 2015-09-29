<?php


//ini_set('display_errors',1); 
//error_reporting(E_ALL);

class Analysis {


  static function updateCab($cid, $estado) {
    global $dbh;
    try {
      $sql = "UPDATE cabimentacao SET estado = ? WHERE cid = ?";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($estado, $cid));
      //$count = $stmt->rowCount();
      return true;
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $errors['generic'] = "ERRO[78]: ".$errmsg;
      return false;
    }
  }


  static function updateTrans($tid, $estado) {
    global $dbh;
    try {
      $sql = "UPDATE providencia SET estado = ? WHERE transferenciainterna = ?";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($estado, $tid));
      //$count = $stmt->rowCount();
      return true;
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $errors['generic'] = "ERRO[79]: ".$errmsg;
      return false;
    }
  }


static function insertAnal($cid, $nif, $datadecisao, $decisao, $justificacao) {
    global $dbh;
    try {

        $stmt = $dbh->prepare("INSERT INTO analisa (cabimentacao, analista, datadecisao, decisao, justificacao) VALUES (:cid, :nif, :datadecisao, :decisao, :justificacao)");

        $stmt->bindParam(":cid", $cid);
        $stmt->bindParam(":nif", $nif);
        $stmt->bindParam(":decisao", $decisao);
        $stmt->bindParam(":justificacao", $justificacao);

        if($datadecisao == null)
          $datadecisao = "now()";
          
        $stmt->bindParam(":datadecisao", $datadecisao);


         $stmt->execute();
         
         return true;

        }
        catch(PDOException $e) {
          $errmsg = $e->getMessage();
          // parse errmsg
        $_SESSION["s_errors"]["generic"] = "ERRO[65]: ".$errmsg;
        
        return false;
    }
  }
  
  static function deleteAnal($cid) {
    global $dbh;
    try {

        $stmt = $dbh->prepare("DELETE FROM analisa WHERE cabimentacao = :cid");

        $stmt->bindParam(":cid", $cid);

         $stmt->execute();

        }
        catch(PDOException $e) {
          $errmsg = $e->getMessage();
          // parse errmsg
        $_SESSION["s_errors"]["generic"] = "ERRO[65]: ".$errmsg;
        header("Location: ../index.php");
        die;
    }
  }

static function insertAval($tid, $nif, $data, $veredito) {
    global $dbh;
    try {

        $stmt = $dbh->prepare("INSERT INTO avalia (transferenciainterna, analista, data, veredito) VALUES (:tid, :nif, :data, :veredito)");

        $stmt->bindParam(":tid", $tid);
        $stmt->bindParam(":nif", $nif);
        $stmt->bindParam(":veredito", $veredito);

        if($data == null)
          $data = "now()";
          
        $stmt->bindParam(":data", $data);


         $stmt->execute();
         
         return true;

        }
        catch(PDOException $e) {
          $errmsg = $e->getMessage();
          // parse errmsg
        $_SESSION["s_errors"]["generic"] = "ERRO[66]: ".$errmsg;
        return false;
    }
  }

static function deleveAval($tid) {
    global $dbh;
    try {

        $stmt = $dbh->prepare("INSERT FROM avalia WHERE transferenciainterna = :tid");

        $stmt->bindParam(":tid", $tid);

         $stmt->execute();
         
         return true;

        }
        catch(PDOException $e) {
          $errmsg = $e->getMessage();
          // parse errmsg
        $_SESSION["s_errors"]["generic"] = "ERRO[66]: ".$errmsg;
        
        return false;
    }
  }

static function getPendingCab($id) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT * FROM cabimentacao WHERE estado='Em Análise' AND cid=:id"); 
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        // get next row as an array indexed by column name
        
      $element = $stmt->fetch(PDO::FETCH_ASSOC);

      extract($element, EXTR_OVERWRITE);

      $valor = number_format($valor, 2, '.', ' ');
      $elem = array("cid" => $cid, "valor" => $valor, "atividade" => $atividade, "descricao" => $descricao, "datapedido" => $datapedido, "cc" => $cc);
      
      return ($elem);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[90]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }

  


static function getPendingTrans($id) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT
                              TransferenciaInterna.eid as TID,
                              TransferenciaInterna.valor as Valor,
                              Pede.destino as Destino,
                              Pede.data as DataPedido,
                              Providencia.origem as Origem,
                              Providencia.data as DataAceite
                              FROM TransferenciaInterna
                              JOIN Pede
                              ON TransferenciaInterna.eid = Pede.transferenciainterna
                              JOIN Providencia
                              ON TransferenciaInterna.eid = Providencia.transferenciainterna
                              WHERE Providencia.estado='Em Análise' AND TransferenciaInterna.eid=:id");

         $stmt->bindParam(':id', $id);
        
        $stmt->execute();
        // get next row as an array indexed by column name


      $element = $stmt->fetch(PDO::FETCH_ASSOC);

      extract($element, EXTR_OVERWRITE);

      $valor = number_format($valor, 2, '.', ' ');
      $elem = array("ID" => $tid, "Valor" => $valor, "Destino" => $destino, "DataPedido" => $datapedido, "Origem" => $origem, "DataAceite" => $dataaceite);
     
      
      return ($elem);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[91]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }

  
  static function getInfoTrans($id) {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT
                              TransferenciaInterna.eid as TID,
                              TransferenciaInterna.valor as Valor,
                              Pede.destino as Destino,
                              Pede.data as DataPedido,
                              Providencia.origem as Origem,
                              Providencia.data as DataAceite,
                              Providencia.estado AS Estado
                              FROM TransferenciaInterna
                              JOIN Pede
                              ON TransferenciaInterna.eid = Pede.transferenciainterna
                              JOIN Providencia
                              ON TransferenciaInterna.eid = Providencia.transferenciainterna
                              WHERE TransferenciaInterna.eid=:id");

         $stmt->bindParam(':id', $id);
        
        $stmt->execute();
        // get next row as an array indexed by column name


      $element = $stmt->fetch(PDO::FETCH_ASSOC);

      extract($element, EXTR_OVERWRITE);

      $valor = number_format($valor, 2, '.', ' ');
      $elem = array("ID" => $tid, "Valor" => $valor, "Destino" => $destino, "DataPedido" => $datapedido, "Origem" => $origem, "DataAceite" => $dataaceite, "Estado" => $estado);
     
      
      return ($elem);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[91]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }





  static function getPendingAnalysis() {
    global $dbh;

    try {
        $stmt = $dbh->prepare("SELECT
        Cabimentacao.cid as ID,
        Cabimentacao.valor as Valor,
        Cabimentacao.cc as CC,
        Cabimentacao.datapedido as Data,
        'C' as Tipo,
        Cabimentacao.estado as Estado
        FROM Cabimentacao
        WHERE Cabimentacao.estado='Em Análise'
        UNION
        SELECT
        TransferenciaInterna.eid as ID,
        TransferenciaInterna.valor as Valor,
        Pede.destino as CC,
        Pede.data as Data,
        'TI' as Tipo,
        Providencia.estado as Estado
        FROM TransferenciaInterna
        JOIN Pede
        ON TransferenciaInterna.eid = Pede.transferenciainterna
        JOIN Providencia
        ON TransferenciaInterna.eid = Providencia.transferenciainterna
        WHERE Providencia.estado='Em Análise'");
        
        
        $stmt->execute();
        // get next row as an array indexed by column name
        

        while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);
                    
                    $valor = number_format($valor, 2, '.', ' ');

                    $tab_item = array("ID" => $id, "Valor" => $valor, "CC" => $cc, "Data" => $data, "Tipo" => $tipo);


                    $result[] = $tab_item;
                }


        return ($result);

    }
    catch(PDOException $e) {
        $_SESSION["s_errors"]["generic"][] = "ERRO[20]: ".$e->getMessage();
        header("Location: ../index.php");
        die;
    }
  }
  
  
  
  static function getClosedAnalysis() {
    global $dbh;

    try {
      $stmt = $dbh->prepare("SELECT analisa.cabimentacao AS ID,
                                    analisa.analista AS Analista,
                                    analisa.decisao AS Decisao,
                                    analisa.datadecisao AS Data,
                                    'C' as Tipo,
                                    cabimentacao.cc AS CC
                              FROM analisa
                              JOIN cabimentacao
                                ON analisa.cabimentacao = cabimentacao.cid
                            UNION
                            SELECT avalia.transferenciainterna AS ID,
                                   avalia.analista AS Analista,
                                   avalia.veredito AS Decisao,
                                   avalia.data AS Data,
                                   'TI' AS Tipo,
                                   pede.destino AS CC
                              FROM avalia
                              JOIN pede
                                ON pede.transferenciainterna = avalia.transferenciainterna");
      $stmt->execute();
      
      while($table_row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($table_row, EXTR_OVERWRITE);
        $tab_item = array("ID" => $id, "Analista" => $analista, "Decisao" => $decisao, "Data" => $data, "Tipo" => $tipo, "CC" => $cc);
        $result[] = $tab_item;
      }
      
      return ($result);

    } catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[20]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }

}

  ?>
