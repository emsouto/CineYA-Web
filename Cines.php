<?php

include("header.html");
include ("conexion.php");
?>

 <title>CINE YA</title>
 <style type="text/css">
     body{
     background-color: black;
     background-attachment: fixed;}
</style>
 
 <?php

$query = "SELECT Nombre,Direccion,Id FROM cines";


$resultado = mysqli_query($conexion,$query);

if(!$resultado)

die("Fallo el comando:".mysqli_error($conexion));

else{

?>

<div class="row">
<?php while($rows = mysqli_fetch_array($resultado)){?>
<div class="md-col-2" style="margin-left:100px;margin-top:50px;margin-right:75px;display:flex">
    <div class="card"  style="width: 10rem;">
  <img class="card-img-top" src="imagenes\Logos Cines\Arte Multiplex Belgrano.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" ><?=$rows['Nombre']?></h5>
    <p class="card-text" ><?=$rows['Direccion']?></p>
     
<form action="carteleracine.php" method="post" style="margin-left:30px;">
       <input type="hidden" name="Id" value="<?=$rows['Id'];?>">
        <input type="submit" class="btn btn-primary" value="Cartelera">
    </form>
  </div>
  
</div>
</div>


<?php }?>
</div>
<?php }

mysqli_free_result($resultado);

?>
<?php
include ('footer.html');
?>