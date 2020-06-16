<?php
   include ('conexion.php');
    
    $usuario= $_POST['usuario'];
    $contrasena= $_POST['contrasena'];
    
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
   
    //$sql = "SELECT * FROM usuarios WHERE usuario ='nayla' AND contrasena ='nayla'";
    
    
   //   $result = mysqli_query($conexion,$sql);
     // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $active = $row['active'];
      
     // $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     
   
   // $arr = array('usuario' => $usuario, 'contrasena' => $contrasena,);
    
    echo json_encode($response);
?>