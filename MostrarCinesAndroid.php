<?php
   include ('conexion.php');
    

$res = mysqli_query($conexion,"select * from cines");

    while($row = mysqli_fetch_array($res)) $array[] = $row;
	$json = json_encode($array); 	
    echo $json;
  
?>