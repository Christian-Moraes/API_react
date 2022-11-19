<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$dbname = 'api';
//$port = '7863';
$dsn = "mysql:host=".$host.";dbname=".$dbname;

try {
  $conn = new PDO($dsn, $user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

?>