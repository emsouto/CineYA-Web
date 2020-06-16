<?php

//envia el mail desde contactos
$destino="administrador@cineya.site";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$asunto= $_POST["asunto"];
$mensaje= $_POST["mensaje"];
$contenido ="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

mail($destino, $asunto , $contenido);
header("location:index.php");







?>