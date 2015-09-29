<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

class Users {

  
  static function getPeople() {
    global $dbh;
    
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT * FROM pessoa");
      $stmt->execute(); 
      while($table_row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($table_row, EXTR_OVERWRITE);
        $tab_item = array("NIF" => $nif, "Nome" => $nome);
        $result[] = $tab_item;
      }
	  
	  //sort names alphabetically
	  usort($result, function($a, $b) {
		  return strcmp($a["Nome"],$b["Nome"]);
	  });
      
      return $result;
      
    } catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[31]: ".$e->getMessage();
      header("Location: ../main/index.php");
      die;
    }
  }

  /* Prof function
  // get user's data
  function getByNif($nif) {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.utilizadorautorizado WHERE nif = :nif");
      $stmt->bindParam(':nif', $nif);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[32]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }
  */


// get user's data
  function getByNif($nif) {
    global $dbh;


    try {
      $stmt = $dbh->prepare("SELECT nif, nome, email, morada, telefone, tipo, categoria FROM pessoa WHERE nif = :nif");
      $stmt->bindParam(':nif', $nif);
      $stmt->execute();

      // get next row as an array indexed by column name
      $element = $stmt->fetch(PDO::FETCH_ASSOC);

      extract($element, EXTR_OVERWRITE);
      
      $elem = array("nif" => $nif, "nome" => $nome, "email" => $email, "morada" => $morada, "telefone" => $telefone,"tipo" => $tipo, "categoria" => $categoria);


      return ($elem);

    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[32]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }
  

  static function register($nome, $email, $morada, $telefone, $nif, $tipo, $categoria) {
    global $dbh;
    try {
      $sql = "INSERT INTO pessoa (nome, email, morada, telefone, nif, tipo, categoria) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($nome, $email, $morada, $telefone, $nif, $tipo, $categoria));
      //$count = $stmt->rowCount();
	  
	  return true;
	  
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
	  if (strpos($errmsg, 'pessoa_pkey')) 
		$_SESSION["s_errors"]["generic"] = "O NIF introduzido já existe!";
      else if (strpos($errmsg, 'pessoa_email_key')) 
		$_SESSION["s_errors"]["generic"] = "O endereço de e-mail introduzido já existe!";
      else
		$_SESSION["s_errors"]["generic"] = "ERRO[35]: ".$errmsg;
		
		return false;
    }
  }



  
  // get user's data
  function getByEmail($email) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM pessoa WHERE email = :email");
      $stmt->bindParam(':email', $email);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[32]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }

  // update user
  function update($nif, $pass, $email) {
    global $dbh, $schema;
    try {
      $sql = "UPDATE $schema.utilizadorautorizado SET email = ?, password = ? WHERE nif = ?";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($email, md5($pass), $nif));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $errors['generic'] = "ERRO[33]: ".$errmsg;
      return $errors;
    }
  }
  
  static function changeEmailPerson($email_act, $email_n) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("UPDATE pessoa SET email = :email_n WHERE email = :email_act;");
      $stmt->bindParam(":email_n", $email_n);
      $stmt->bindParam(":email_act", $email_act);
      $stmt->execute();
      return true;
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $_SESSION["s_errors"]["generic"] = "ERRO[32]: ".$errmsg;
      return $errmsg;
    }
  }
  
  static function changeEmailUser($email_act, $email_n) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("UPDATE utilizadorautorizado SET email = :email_n WHERE email = :email_act;");
      $stmt->bindParam(":email_n", $email_n);
      $stmt->bindParam(":email_act", $email_act);
      $stmt->execute();
      return true;
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $_SESSION["s_errors"]["generic"] = "ERRO[33]: ".$errmsg;
      return $errmsg;
    }
  }
  
  function changePassword($pass_act, $pass_n) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("UPDATE utilizadorautorizado SET password = :pass_n WHERE password = :pass_act;");
      $stmt->bindParam(":pass_n", $pass_n);
      $stmt->bindParam(":pass_act", $pass_act);
      $stmt->execute();
      return true;
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $_SESSION["s_errors"]["generic"] = "ERRO[33]: ".$errmsg;
      return $errors;
    }
  }

  // delete user
  static function delete($nif) {
    global $dbh;
    try {
      $sql = "DELETE FROM pessoa WHERE nif = :nif";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':nif', $nif);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[35]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }
  
  // delete user
  static function deleteAuthorization($email) {
    global $dbh;
    try {
      $sql = "DELETE FROM utilizadorAutorizado WHERE email = :email";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':email', $email);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[35]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }
  
  
  //insert user pass data
  static function registerAuthorization($email, $password) {
    global $dbh;
	
    try {
      $sql = "INSERT INTO utilizadorautorizado (email, password) VALUES (?, ?)";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($email, $password));
      //$count = $stmt->rowCount();
	  
	  return true;
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      if (strpos($errmsg, 'pessoa_email_key')) 
		$_SESSION["s_errors"]["generic"] = "O endereço de e-mail introduzido já existe!";
      else
		$_SESSION["s_errors"]["generic"] = "ERRO[35]: ".$errmsg;
		
		return false;
    }
  }
  

  // authenticate user
  static function existsUsernamePassword($email, $password) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM utilizadorautorizado WHERE email = :email");
      $stmt->bindParam(':email', $email);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
	  
      if ($result["password"] == $password)
	      return true;
      else 
	      return false;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      header("Location: ../index.php");
	  die;
    }
  }


} /*** end of class ***/

?>