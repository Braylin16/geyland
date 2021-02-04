<?php
// Conexion a la base de datos
try{
  $conexion = new PDO('mysql:host=localhost;dbname=geyland', 'root', '');
}catch(PDOExeption $e){
  echo "Lo sentimos, ha ocurrido un error nuestros ingenieros trabajan para solucionarlo: " . $e->getMessage();
  die();
}