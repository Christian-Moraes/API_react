<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$dbname = 'api';

try {
  $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

?>