<?php

include('header.html');
include ('conexion.php');
?>

<!DOCTYPE html>
<html>

<body>
	<!-- header-section-starts -->
	<div class="full">
			
		<div class="main">
		<div class="cine-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index"><img src="images/logos.png" alt="" /></a>
					<p>CineYa</p>
				</div>

				<div class="clearfix"></div>
			</div>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3 class="head">CINES</h3>
					</div>
				</div>
				<!-- pop-up-box --> 
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		
                <script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				});
		</script>

		<!--//pop-up-box -->

                <div class="content-grids">
                    
                    <?php
                    $query = "SELECT Nombre,Direccion,Id,Imagen FROM cines";
                    $resultado = mysqli_query($conexion,$query);
                    if(!$resultado){

                        die("Fallo el comando:".mysqli_error($conexion));
}
                    else{
                          while($rows = mysqli_fetch_array($resultado)){?>
                    <div class="content-grid">
                        
						<a class="play-icon popup-with-zoom-anim"><img src="<?php echo $rows['Imagen']?>" /></a>
						<h2><?=$rows['Nombre']?></h2>
                        <h3><?=$rows['Direccion']?></h3>

						<form action="carteleracine" method="post" style="margin-left:30px;">
       <input type="hidden" name="Id" value="<?=$rows['Id'];?>">
        <input type="submit" class="btn btn-primary" value="Cartelera">
    </form>
                        
            
					</div>
					
                       <?php
                       }
                    }
                    
                       ?>     
                 
                    
                    

				
					<div class="clearfix"> </div>
				
				</div>
			</div>
			<div class="clearfix"> </div>
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