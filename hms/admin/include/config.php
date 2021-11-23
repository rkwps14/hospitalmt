<?php
$servername = "localhost";
$username = "root";
$password = "#P4ssword";

try {
  $conn = new PDO("mysql:host=$servername;dbname=hms", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>