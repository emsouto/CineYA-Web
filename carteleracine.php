<?php

include("header.html");
include ("conexion.php");
require 'simple_html_dom.php';

?>

<?php
		if(empty($_POST['Id'])){
			echo 'Not FOUND !!!!';
        }else{
      
            switch($_POST['Id']){
                    
    case 1:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/hoyts-abasto-de-buenos-aires-sa95');
               $prueba=str_get_html($test);
        foreach($prueba->find('img') as $element) 
       echo $element->src . '<br>';
?><img src="https://bucket1.glanacion.com/anexos/fotos/cartelera/shazam-9023w120.jpg"  />
  <?php           
            break;
                    
    case 2:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/atlas-patio-bullrich-sa119');
            echo $test;
            break;
                    
    case 3:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/village-recoleta-sa400');
            echo $test;
            break;
                    
   case 4:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/cinema-city-general-paz-sa126');
            echo $test;
            break;
                    
    case 5:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/showcase-cinemas-belgrano-sa170');
            echo $test;
            break;
                    
    case 6:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/belgrano-multiplex-sa125');
            echo $test;
            break;
                    
    case 7:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/cabildo-multiplex-sa1006');
            echo $test;
            break;
                    
    case 8:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/cinemark-caballito-sa130');
            echo $test;
            break;
                    
    case 9:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/village-caballito-sa446');
            echo $test;
            break;
                    
    case 10:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/premier-sa120');
            echo $test;
            break;
                    
    case 11:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/bama-cine-arte-sa471');
            echo $test;
            break;
                    
    case 12:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/lorca-sa110');
            echo $test;
            break;
                    
    case 13:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/monumental-sa229');
            echo $test;
            break;
                    
    case 14:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/espacio-incaa-sala-gaumont-sa107');
            echo $test;
            break;
                    
    case 15:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/monumental-4d-e-motion-sa1167');
            echo $test;
            break;
                    
    case 16:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/atlas-flores-sa133');
            echo $test;
            break;
                    
    case 18:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/cinema-city-general-paz-sa126');
            echo $test;
            break;
                    
    case 19:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/atlas-alcorta-sa985');
            echo $test;
            break;
                    
    case 20:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/cinemark-puerto-madero-sa102');
            echo $test;
            break;
                    
    case 21:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/cinema-devoto-sa407');
            echo $test;
            break;
                    
    case 22:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/hoyts-dot-sa520');
            echo $test;
            break;
                    
    case 23:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/hoyts-dot-premium-sa522');
            echo $test;
            break;
                    
    case 24:
    $test=file_get_contents('http://guia.lanacion.com.ar/cine/sala/cpm-cinemas-del-parque-shopping-sa1154');
            echo $test;
            break;
                    
                    
                       }               
           
           }
     

    
?>

