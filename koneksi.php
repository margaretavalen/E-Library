<?php
$db_host='localhost:3306';
$db_database='elibrary';
$db_username='root';
$db_password='';

//connect database
$db = new mysqli($db_host, $db_username, $db_password, $db_database);
if($db->connect_errno){
  die("Could not connect to the database: <br />". $db->connect_error);
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// try {    
//   //create PDO connection 
//   $db = new PDO("mysql:host=$db_host; dbname=$db_database", $db_username, $db_password);
// } catch(PDOException $e) {
//   //show error
//   die("Terjadi masalah: " . $e->getMessage());
// }
?>