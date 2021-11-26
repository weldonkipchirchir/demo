<?php

$username = 'root';
$password = '';
$dsn = 'mysql:host=localhost; dbname=mydb';

try {

  $conn = new PDO($dsn, $username, $password);//POD(php data objects)-accessing the database 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

?>
