<?php
include('conexion.php');



$Id_usuario=$_POST ['Id_usuario'];
$Id_cine=$_POST ['Id_cine'];

$insfav=mysqli_prepare($conexion,"INSERT INTO favoritos(Id_usuario,Id_cine)values (?,?)");


mysqli_stmt_bind_param($insfav,"ii",$Id_usuario,$Id_cine);
mysqli_stmt_execute($insfav);
$response=array();
$response["success"]=true;

echo json_encode($response);

?>

