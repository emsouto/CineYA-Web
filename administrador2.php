<?php 
include("conexion.php");
    
  /*if(empty($usuario) || empty($pass)){
   header("Location: administrar.html");
    //echo'ingresar datos';
	exit();
}
*/

    ?>

<?php

    
    $consulta= "SELECT nombre,usuario from usuarios";
    $result = mysqli_query($conexion,$consulta);

?>
    <h1 align="center">Usuarios Android</h1>
    <table width="70%" border="1px" align="center">

    <tr align="center">
        <td>Nombre</td>
        <td>Usuario</td>
    </tr>

    
<?php 
        while($datos=$result->fetch_array()){
        ?>
            <tr>
                <td><?php echo $datos["nombre"]?></td>
                <td><?php echo $datos["usuario"]?></td>
                
            </tr>
            <?php   
        }

     ?>
</table>
