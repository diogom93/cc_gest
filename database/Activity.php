<?php  

class Activity {

  static function getAllActivities() {
    global $dbh;
    try {
	
	
	 //$todays_date = date( 'Y-m-d'); //yyyy-mm-dd
	
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT * FROM atividade WHERE datafim >= CURRENT_DATE OR datafim IS NULL");
	  //$stmt->bindParam(":todays_date", $todays_date);
      $stmt->execute();
      // get array containing all of the result set rows 
     
      while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);

                    $tab_item = array("aid" => $aid, "nome" => $nome, "datainicio" => $datainicio, "datafim" => $datafim, "tipo" => $tipo);


                    $result[] = $tab_item;
                }


        return $result;


    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[40]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
    }

    static function getInfoActivities($cid) {
    global $dbh;
    try {
  
  
   //$todays_date = date( 'Y-m-d'); //yyyy-mm-dd
  
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT aid, nome, atividade.datainicio AS datainicio, atividade.datafim AS datafim, tipo
                            FROM atividade
                            JOIN cabimentacao ON cabimentacao.atividade = atividade.aid
                            WHERE cabimentacao.cid = cid");
    //$stmt->bindParam(":todays_date", $todays_date);
      $stmt->execute();
      // get array containing all of the result set rows 
     
      while( $table_row = $stmt->fetch(PDO::FETCH_ASSOC) )
                {
                    //create elements:
                    //assume table_row is an array, extract all relevant data, make sure to overwrite old stuff:
                    
                    extract($table_row, EXTR_OVERWRITE);

                    $tab_item = array("aid" => $aid, "nome" => $nome, "datainicio" => $datainicio, "datafim" => $datafim, "tipo" => $tipo);


                    $result[] = $tab_item;
                }


        return $result;


    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[41]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
    }


  static function getAllInfoActivity($aid) {
    global $dbh;
    try {
  
      $stmt = $dbh->prepare("SELECT * FROM atividade WHERE aid = :id");
	  
	  $stmt->bindParam( 'id', $aid );
	  
      $stmt->execute();
	  
	  $table_row = $stmt->fetch(PDO::FETCH_ASSOC);

      return $table_row;


    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[41]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
    }



  static function createActivity($nome, $datainicio, $datafim, $tipo) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO atividade (nome, datainicio, datafim, tipo) VALUES (:nome, :datainicio, :datafim, :tipo)");
      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":datainicio", $datainicio);
      $stmt->bindParam(":tipo", $tipo);


      $stmt->bindParam(":datafim", $datafim);

      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      header("Location/*index.php");
	  die;
	  
    }
  }


}

  ?>