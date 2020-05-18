
<?php
 include("simple_html_dom.php");
	include('conexion.php');




$htmInicio=file_get_html('https://www.clarin.com/espectaculos/cine/cartelera.html');



$pelEstrenos=$htmInicio->find('div[class=container no-p]',0);


foreach ($pelEstrenos->find('article') as $key ) {
	foreach($key->find('img') as $element) {

		
		$nombre=$element->alt;
		
		$st1=substr($element->src, 0,-40);
		$protocolo=$st1;
		$img=$element->getAttribute('data-src');
		$imagen=$protocolo.$img;
}

$contenido=$key->find('div[class=mt]',0);
foreach ($contenido->find('p') as $genero) {

	//var_dump($genero);
	//echo $genero;
}

$enviar=mysqli_query($conexion,"INSERT INTO iniciopelis values ('$nombre','$imagen','$genero',date('Y-m-d H:i:s'))");
//var_dump($enviar);

}



/*
foreach($pelEstrenos->find('img') as $element) {

		
		$nombre=$element->alt;
		$st1=substr($element->src, 0,-40);
		$protocolo=$st1;
		$img=$element->getAttribute('data-src');
		$imagen=$protocolo.$img;
		 
	
	

		

		$enviar=mysqli_query($conexion,"INSERT INTO iniciopelis values ('$nombre','$imagen')");
		
	
		
	
	
	



	
}

*/
      
   ?>
    