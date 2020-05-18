<?php
   include ('conexion.php');
    

$res = mysqli_query($conexion,"select Nombre, Direccion, Url from cines");

    

    for ($set = array(); $row = $res->fetch_assoc(); $set[] = $row);    
    // print_r($set);
    $json = json_encode($set);
    echo $json;

  
?>