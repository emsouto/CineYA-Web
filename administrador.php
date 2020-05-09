<html> 
<body> 
<?php 
include("conexion.php");
$result = mysqli_query($conexion,"SELECT nombre, usuario FROM usuarios"); 
echo "<table border = '1'> \n"; 
echo "<tr><td>Nombre</td><td>Usuario</td></tr> \n"; 
while ($row = mysqli_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
} 
echo "</table> \n"; 
?> 
  
</body> 
</html> 