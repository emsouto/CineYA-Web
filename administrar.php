<?php
include("conexion.php");

?>
<?php

$usuario = $_POST['nombre'];
$pass = $_POST['password'];

if(empty($usuario) || empty($pass)){
   header("Location: administrar.html");
    //echo'ingresar datos';
	exit();
}



$result = mysqli_query($conexion,"SELECT * from administradores where usuario='" . $usuario . "'");

if($row = mysqli_fetch_array($result)){
    // valida los datos
	if($row['contrasena'] ==  $pass){
      session_start();
		$_SESSION['usuario'] = $usuario;
       //ingresa si los datos del usuario estan bieny me direcciona a administrador.php
		header("Location: administrador.php");
	}else{
       //si los datos estan mal no autentica y se queda en administrar .html
		header("Location: administrar.html");
		exit();
	}
}else{
	header("Location: administrar.html");
    
	exit();
}


?>