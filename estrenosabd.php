<?php
 include('simple_html_dom.php');
	include('conexion.php');


?>

<?php

 

$test=file_get_html('https://www.lanacion.com.ar/cartelera-de-cine/proximos-estrenos');



$proximo=$test->find('div[class=listaPrincipal]',0);



	
	foreach($proximo->find('img') as $element) {
        
	
			
			$nombre=$element->alt;
     
			
			$st1=substr($element->src, 0);
			$protocolo=$st1;
          
			$img=$element->getAttribute('data-src');
			$imagen=$protocolo.$img;
         
        
        $enviar=mysqli_query($conexion,"INSERT INTO estrenos values ('$nombre','$imagen')");
        
       
    }
        


        
	
  ?>