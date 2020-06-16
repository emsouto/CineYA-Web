<?php


include('header.html');
include('conexion.php');
include('simple_html_dom.php');

?>
<html>
    
    <body>
        
        <div class="full">
            
            <div class="main">
                
                <div class="top-header span_top">
				<div class="logo">
					<a href="index"><img src="images/logos.png" alt="" /></a>
					<p>CineYa</p>
				</div>

				<div class="clearfix"></div>
			</div>
                <div class="right-content">
                    
                    <div class="right-content-heading-left">
						<h3 class="head">Cartelera</h3>
					</div>
<?php

   // function Cuarentena($conexion){

 
    

        
        $test=file_get_html('https://www.lanacion.com.ar/cartelera-de-cine');
        $carteleraid=$test->find('div[class=Listas de peliculas]',0);
       
       if (empty($carteleraid)) {
            
            ?>
                    <img src="images/peliculas.png">
                    
                    <!-- si lo hacemos con php-->
<?php
/*echo '<div id="info">Estimados clientes las salas de los cines se encuentran cerradas</div>';*/
?>
                    <h3 class="head">Proximos Estrenos</h3>
                    

		<div class="review-slider">
       <ul id="flexiselDemo1">
                 
                 <?php
            
                 $qwerys = "SELECT Nombres, Url FROM estrenos limit 10"; 
            
            if(!$result = mysqli_query($conexion, $qwerys)) die();
               
            
             
                 while($sliderImages=mysqli_fetch_assoc($result)){?>
                <li><img src="<?php echo $sliderImages['Url'] ?>" alt="<?php echo $sliderImages['Nombres'] ?>"/></li>
                <?php 
                 
                     /*cierra el while*/
                 } 
                 ?>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>
<?php
}else{
echo "Error";
}
//}
    
		if(empty($_POST['Id'])){
			echo 'Not FOUND !!!!';
        }else{
      
            switch($_POST['Id']){

                    
    case 1:

    

    

  break;
  


    case 2:


    
   
            break;
                    
    case 3:

    
   
            break;
                    
   case 4:
   
            break;
                    
    case 5:
    
            break;
                    
    case 6:
   
            break;
                    
    case 7:
    
            break;
                    
    case 8:
    
            break;
                    
    case 9:
    
            break;
                    
    case 10:
   
            break;
                    
    case 11:
    
            break;
                    
    case 12:
    
            break;
                    
    case 13:
    
            break;
                    
    case 14:
    
            break;
                    
    case 15:
    
            break;
                    
    case 16:
    
            break;
                    
    case 18:
    
            break;
                    
    case 19:
    
            break;
                    
    case 20:
    
            break;
                    
    case 21:
    
            break;
                    
    case 22:
    
            break;
                    
    case 23:
    
            break;
                    
    case 24:
    
            break;
                    
                    
                               
           
           }
     
        }
    
?>
                    </div>
                <div class="footer">   
		<h6>CineYa </h6>
		<p class="claim">Descarga la aplicacion mobile</p>
		<a href="https://www.cineya.site/contacto">Cineya@cineya.site</a>
		<div class="copyright">
        </div>
	</div>
                </div>
            <div class="clearfix"></div>
        </div>
</body>
</html>