<?php
$servername = "localhost";
$username = "root"; // username database
$password = ""; // password database

try {
  $conn = new PDO("mysql:host=$servername;dbname=db_baby", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>