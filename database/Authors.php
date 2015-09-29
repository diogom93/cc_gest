<?php

class Authors {

  // get all tuples of authors
  function getAll() {
    global $dbh, $schema;
    try {
      // using prepared statements will help protect you from SQL injection
      $stmt = $dbh->prepare("SELECT * FROM $schema.authors");
      $stmt->execute();
      // get array containing all of the result set rows 
      $result = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $result;
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[11]: ".$e->getMessage();
      header("Location: ../main/index.php");
      die;
    }
  }

  // get author's data
  function getById($id) {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT * FROM $schema.authors WHERE aid = :id");
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return ($result);
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[12]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }
 
 // update authors
  function update($id, $name, $email, $phone, $age) {
    global $dbh, $schema;
    try {
      $sql = "UPDATE $schema.authors SET aname=?, aemail=?, aphone=?, aage=? WHERE aid=?";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($name, $email, $phone, $age, $id));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $errors["generic"] = "ERRO[13]: ".$errmsg;
      return $errors;
    }
  }

  // insert author
  function insert($name, $email, $phone, $age) {
    global $dbh, $schema;
    try {
      $sql = "INSERT INTO $schema.authors (aid, aname, aemail, aphone, aage) VALUES (DEFAULT, ?, ?, ?, ?)";
      $stmt = $dbh->prepare($sql);
      $stmt->execute(array($name, $email, $phone, $age));
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $errmsg = $e->getMessage();
      // parse errmsg
      $errors["generic"] = "ERRO[14]: ".$errmsg;
      return $errors;
    }
  }

  // delete authors
  function delete($id) {
    global $dbh, $schema;
    try {
      $sql = "DELETE FROM $schema.authors WHERE aid = :id";
      $stmt = $dbh->prepare($sql);
      $stmt->bindParam(':id', $id, PDO::PARAM_INT);
      $stmt->execute();
      //$count = $stmt->rowCount();
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[15]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

  // get last used id from sequence
  function getLastInsertedId() {
    global $dbh, $schema;
    try {
      $stmt = $dbh->prepare("SELECT currval('$schema.authors_aid_seq') as id");
      $stmt->execute();
      // get next row as an array indexed by column name
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result["id"];
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[16]: ".$e->getMessage();
      header("Location: list.php");
      die;
    }
  }

} /*** end of class ***/

?>