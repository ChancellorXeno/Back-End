<?php
function pdo_connect_mysql(){
  $servername = "localhost";
  $username = "root";
  $password = "mysql";

  try {
    $pdo = new PDO("mysql:host=$servername;dbname=backend", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    return $pdo;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}
$pdo = pdo_connect_mysql();

include 'list_create.php';
include 'list_read.php';
include 'list_update.php';
include 'list_delete.php';
?>