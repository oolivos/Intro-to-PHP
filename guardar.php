<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = "localhost";
  $usuario = "root";
  $password = "root";
  $bd = "unisangil";

  $mysql = new mysqli($servidor, $usuario,$password, $bd);
  if($mysql->connect_errno){
    echo "Error al Conectarse con ".$servidor;
    echo "Error :". $mysql->connect_error;
  }

$identificacion = $_POST['identificacion'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

  $sql = "INSERT INTO estudiantes(identificacion, nombres, apellidos, correo, telefono) 
  			VALUES('$identificacion', '$nombres','$apellidos','$correo','telefono')";
  $insert = $mysql->query($sql);
  if($insert){
  	header('Location: index.php');
  }else{
  	echo "Error al guardar al estudiante ".$mysql->error;
  }



 ?>