<?php
$db_host = 'localhost';
$db_user = "root";
$db_pass = "";
$db_name = "barangay";

$db = new PDO('mysql:host=localhost;dbname='.$db_name. ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$mysqli=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
//$mysqli=mysqli_connect("localhost","root","","barangay");






  






/*
$servername = "localhost";
$db_username = "root";
$db_password = "";
try {
  $conn = new PDO("mysql:host=$servername;dbname=binfosystem", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
/*
$sql = "CREATE DATABASE registra";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
*/
?>
