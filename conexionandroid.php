<?php



include ('conexion.php');


$nombre=$_POST ['nombre'];
$usuario=$_POST ['usuario'];
$contrasena=$_POST ['contrasena'];
$repcontrasena= $_POST ['repcontrasena'];
$statement = mysqli_prepare($conexion,"INSERT INTO usuarios(nombre,usuario,contrasena,repcontrasena) VALUES (?,?,?,?)");

mysqli_stmt_bind_param($statement,"ssss",$nombre,$usuario,$contrasena,$repcontrasena);
mysqli_stmt_execute($statement);

$response = array();
$response["success"]=true;

echo json_encode($response);


?>