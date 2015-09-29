<?php

//database constants
$user = 'sibd1427';
$pass = 'umacenafacilqualquer';	 //Don't judge, ok?
$dbname = 'sibd1427';

$host = 'db.fe.up.pt';
$dsn = 'pgsql:host='.$host.';dbname='.$dbname;

$schema = 'Grupo11';

$dbh = null;

// get a database connection (global)
try {
  $dbh = new PDO($dsn, $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // select schema (do NOT pick public schema)
  $dbh->query("SET search_path = '$schema', pg_catalog;") or die("Failed to select Schema!");
} catch (PDOException $e) {
  $_SESSION["s_errors"]["generic"][] = "ERRO[00]: ".$e->getMessage();
  //header("Location: ../main/index.php");
  echo "ERRO[00]: ".$e->getMessage();
  die;
}

?>
