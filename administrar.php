<?php

session_start();
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

//PUEDE SER UNA MANERA DE EVITAR SQL INJECTION
$result = mysqli_query($conexion,"SELECT * from administradores where usuario='" . mysqli_real_escape_string($conexion, $usuario) . "'");


if($row = mysqli_fetch_array($result)){
    // valida los datos
	if($row['contrasena'] ==  $pass){
      session_start();
		$_SESSION['usuario'] = $usuario;
        
		if ($_SESSION['usuario']=="Emmanuel") {
            //si el usuario es Emmanuel ingresa al 1
			header("Location: administrador1.php");
            //si no el usuario es nayla ingresa al 2
		} else if ($_SESSION['usuario']=="Nayla") {
			header("Location: administrador2.php");
		} 
		
       //ingresa si los datos del usuario estan bieny me direcciona a administrador.php
		
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


?>