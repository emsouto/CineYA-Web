<?php

$hostname= 'localhost';
$database= 'cineya';
$username= 'root';
$password= '';

//crear la conexion

$conexion=mysqli_connect($hostname, $username, $password,$database);

//Manejo de errores

if (!$conexion)

die("Falló la conexión a MySQL: " . mysqli_error());

else

//echo "Conexión exitosa!";

//Seleccionar base de datos

//mysqli_select_db($database,$conexion)

//or die("Seleccion de base de datos fallida " . mysqli_error($conexion));

?>


