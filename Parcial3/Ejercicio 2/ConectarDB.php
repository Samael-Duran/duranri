<?php
$hostname='localhost';
$database='duranri';
$username='root';
$password='';
try {
      $DBH = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
} catch(PDOException $e) {
      echo "Error en la conexion";
      echo $e->getMessage();
      exit();
}
$DBH->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>