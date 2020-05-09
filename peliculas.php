<?php

include("header.html");
include ("conexion.php");

?>
<style>

 body{ background:black;  
 }  
    
</style>

<div class='col-12' style= color:red;font-size:50px;margin:auto;width:50%;border:3pxsolidgreen;padding:10px;><p>PELICULAS EN CARTELERA</p> </div>

<?php

include_once ("simple_html_dom.php");

$html =file_get_html('http://guia.lanacion.com.ar/resultado/pelicula/zonas-2,orden-alfabetico');
$inicio=$html->find('section[class=buscadorResultados floatFix]',0);
$peliculas=$html->find('section[class=columnaResultados',0);


echo "</div>";
?>

<?php
include("footer.html")

?>