<?php
$host = getenv('MYSQL_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$dbName =  getenv('MYSQL_DATABASE');
$port= getenv('MYSQL_PORT');

echo $dbName. ' '. $username. ' '. $password ;


try {
  $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 