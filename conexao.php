<?php
$host = 'containers-us-west-128.railway.app';
$user = 'root';
$pass = 'dXUdp1YYjwJR2vokuVDS';
$dbname = 'api';
$port = '7863';
$dsn = "mysql:host=".$host.";dbname=".$dbname.";charset=utf8mb4;port=".$port;

try {
  $conn = new PDO($dsn . $dbname, $user, $pass);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

?>