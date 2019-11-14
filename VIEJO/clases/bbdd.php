<?php
$dsn="mysql:host=127.0.0.1;dbname=movies_db;port=3306";
$usuario = "root";
$pass = "";
try {
  $bbdd = new PDO($dsn,$usuario,$pass);
  $bbdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
  var_dump($e->getMessage());
  echo ("<br> vuelve luego, los datos estan de huelga :/ ");
}







 ?>
