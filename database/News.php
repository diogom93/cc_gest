<?php

class News {

  // get all tuples
  function getAll() {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT * FROM $schema.news ORDER BY ndate");
      $stmt->execute();
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[21]: ".$e->getMessage();
      header("Location: ../main/index.php");
      die;
     }
  }

  // get news tuple
  function getById($id) {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.news WHERE nid = :id");
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return ($result);
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[22]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // update news tuple
  function update($id, $title, $body, $date, $author, $status) {
    global $dbh, $schema;
    try {
      $sql = "UPDATE $schema.news SET ntitle=?, nbody=?, ndate=?, nauthor=?, nstatus=? WHERE nid=?";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($title, $body, $date, $author, $status, $id));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      if (strpos($errmsg, 'news_ndate_ck')) 
	$errors["ndate"] = "Data inválida!";
      elseif (strpos($errmsg, 'news_nauthor_fk')) 
	$errors["nauthor"] = "Autor inexistente!";
      else 
	$errors["generic"] = "ERRO[23]: ".$errmsg;
      return $errors;
    }
  }

  // insert news tuple
  function insert($title, $body, $author) {
    global $dbh, $schema;
    try {
      $sql = "INSERT INTO $schema.news (nid, ntitle, nbody, ndate, nauthor, nstatus) VALUES (DEFAULT, ?, ?, DEFAULT, ?, DEFAULT)";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($title, $body, $author));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      if (strpos($errmsg, 'news_ndate_ck')) 
	$errors["ndate"] = 'Data inválida!';
      elseif (strpos($errmsg, 'news_nauthor_fk')) 
	$errors["nauthor"] = 'Autor inexistente!';
      else 
	$errors["generic"] = "ERRO[24]: ".$errmsg;
      return $errors;
    }
  }

  // delete news tuple
  function delete($id) {
    global $dbh, $schema;
    try {
      $sql = "DELETE FROM $schema.news WHERE nid = :id";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[25]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // get last used id from sequence
  function getLastInsertedId() {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT currval('$schema.news_nid_seq') as id");
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result["id"];
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[26]: ".$e->getMessage();
      header("Location: ../main/index.php");
      die;
    }
  }

  // get number of tuples
  function getNumRows() {
    global $dbh, $schema;
    try {
      $stmt = $dbh->query("SELECT COUNT(*) FROM $schema.news");
      $result = $stmt->fetchColumn();
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[27]: ".$e->getMessage();
      header("Location: ../main/index.php");
      die;
    }
  }

  // get all tuples with the name of the author
  function getAllNewsAuthor() {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT n.*, a.aname FROM $schema.news n, $schema.authors a WHERE n.nauthor=a.aid ORDER BY ndate");
      $stmt->execute();
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[28]: ".$e->getMessage();
      header("Location: ../main/index.php");
      die;
     }
  }

  // get :limit tuples with the name of the author starting in :offset
  function getAllNewsAuthorLimit($limit, $offset) {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT N.*, A.aname 
                             FROM $schema.news N, $schema.authors A
                             WHERE N.nauthor = A.aid
                             ORDER BY ndate
                             LIMIT :limit OFFSET :offset");
      $stmt->execute(array($limit, $offset));
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[29]: ".$e->getMessage();
      header("Location: ../main/index.php");
      die;
     }
  }

} /*** end of class ***/

?>