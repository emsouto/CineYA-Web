<?php
include ('conexion.php');
    ?>
    
    <?php
   
$cuarente=mysqli_set_charset($conexion,"utf8");

$cua = mysqli_query($conexion,"select * from Cuarentena");


    

   for ($cuaren = array(); $row = $cua->fetch_assoc(); $cuaren[] = $row);    
    
    $json = json_encode($cuaren);
    echo $json;

?>