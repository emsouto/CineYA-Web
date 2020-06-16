<?php
 
include('conexion.php');

?>


<?php
/*
$Id_usuario = $_POST['Id_usuario'];

$mosfav=mysqli_prepare($conexion,"select * from cines c join favoritos f ON (c.Id =f.Id_cine) where f.Id_usuario= ?");

  
 
 
 mysqli_stmt_bind_param($mosfav, "i", $Id_usuario);

 mysqli_stmt_execute($mosfav);
    
   
mysqli_stmt_store_result($mosfav);
    mysqli_stmt_bind_result($mosfav,$Id, $Nombre, $Direccion ,$Url , $Imagen,$Id,$Id_usuario,$Id_cine);
    
    $response = array();
    $response["success"] = false; 
    
    
    
    while(mysqli_stmt_fetch($mosfav)){
        $response["success"] = true;  
        $response["Id"] = $Id;
        $response["Nombre"] = $Nombre;
         $response["Direccion"] = $Direccion;
        $response["Url"] = $Url;
        $response["Imagen"] = $Imagen;
        $response["Id"] = $Id;
        
    }
    
    
    echo json_encode($response);*/
    
$Id_usuario = $_POST['Id_usuario'];

$mosfav=mysqli_prepare($conexion,"select * from cines c join favoritos f ON (c.Id =f.Id_cine) where f.Id_usuario= ?");

  
 
 
 mysqli_stmt_bind_param($mosfav, "i", $Id_usuario);

 mysqli_stmt_execute($mosfav);
    
   
mysqli_stmt_store_result($mosfav);
    mysqli_stmt_bind_result($mosfav,$Id, $Nombre, $Direccion ,$Url , $Imagen,$Id,$Id_usuario,$Id_cine);
    
    $response = array();
    // $response["success"] = false; 
    
    
    
while(mysqli_stmt_fetch($mosfav)){
    
 // $myCine["success"] = true;  
    $myCine = array();
    $myCine["Id"] = $Id;
    $myCine["Nombre"] = $Nombre;
    $myCine["Direccion"] = $Direccion;
    $myCine["Url"] = $Url;
    $myCine["Imagen"] = $Imagen;
    $myCine["Id"] = $Id;

    array_push($response, $myCine);

 }
    // $myCine = new class{};
    // $myCine["Id"] = "1";
    // $myCine["Nombre"] = "Nombre 1";
    // $myCine["Direccion"] = "Direccion 1";
    // $myCine["Url"] = "asasdasdasd";
    // $myCine["Imagen"] = "asdagsfgs";
    // $myCine["Id"] = "1";
    
    // $response.array_push(json_encode($myCine));

    // $myCine = new class{};
    // $myCine["Id"] = "2";
    // $myCine["Nombre"] = "Nombre 2";
    // $myCine["Direccion"] = "Direccion 2";
    // $myCine["Url"] = "asasdasdasd";
    // $myCine["Imagen"] = "asdagsfgs";
    // $myCine["Id"] = "2";
    
    // $response.array_push(json_encode($myCine));
    
    echo json_encode($response);
?>