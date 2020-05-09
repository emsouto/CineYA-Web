<?php
   include ('conexion.php');
    
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    $statement = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE usuario = ? AND contrasena = ?");
    mysqli_stmt_bind_param($statement, "ss", $usuario, $contrasena);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $nombre, $usuario, $contrasena, $repcontrasena);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["userID"] = $userID;
        $response["nombre"] = $nombre;
        $response["usuario"] = $usuario;
        $response["contrasena"] = $contrasena;
        $response["repcontrasena"] = $repcontrasena;
    }
    
    echo json_encode($response);
?>