<?php
include ('header.html');
include ('conexion.php');
include('EnviarUrlABd.php');
//include ('RecibeInfoBD.php');

?>
	<!-- header-section-starts -->
<html>

<body>
	<!-- header-section-starts -->
	<div class="full">
			
		<div class="main">
                <?php
                
                     $sqlQuerys = "SELECT Nombres, Url ,Genero,Tipo FROM iniciopelis where Id =1";
                     $resultSeta = mysqli_query($conexion, $sqlQuerys);
                    
                        while($sliderImagenes = mysqli_fetch_assoc($resultSeta)){?>

                  <div class="header" style="background:url('<?php echo $sliderImagenes['Url'] ?>') no-repeat 0px 0px
                                 ;background-size: 60% 100%; background-color: currentcolor;background-position:center; ">  


                <div class="top-header">
                    <div class="logo">
                        <a href="index"><img src="images/logos.png" alt="" /></a>
                        <p>CineYa</p>
                    </div>

                    <div class="clearfix"></div>
                </div>




                <div class="header-info">
                    <?

                            $titulo="<h1>".$sliderImagenes['Nombres']."</h1>"	;
                            echo $titulo;

                            $tipo="<p>".$sliderImagenes['Tipo']."</p>";
                            echo $tipo;

                            $genero="<p>".$sliderImagenes['Genero']."<p>";
                            echo $genero;
                    ?>
            <!-- sinopsis habria q hacer otro web 
                    <p class="special">The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.</p>-->

                    <a class="cine" href="https://www.youtube.com/embed/Tj2vUQ_jIYg"><i class="cine1"></i>Mirar trailers</a>

                <!--	<a class="book" href="#"><i class="book1"></i>BOOK TICKET</a>-->

                   <?php

                        }
                    ?>
                </div>
            </div>
            <div class="review-slider">
                 <ul id="flexiselDemo1">

                     <?php
                     $sqlQuery = "SELECT Nombres, Url ,Genero,Tipo FROM iniciopelis";
                     $resultSet = mysqli_query($conexion, $sqlQuery);
                     while($sliderImage = mysqli_fetch_assoc($resultSet)){?>
                    <li><img src="<?php echo $sliderImage['Url'] ?>" alt=""/></li>
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
            <div class="cine">
                <iframe  src="https://www.youtube.com/embed/Tj2vUQ_jIYg" frameborder="0" allowfullscreen></iframe>


            </div>

    <div class="footer">   
            <h6>CineYa </h6>
            <p class="claim">Descarga la aplicacion mobile</p>
            <a href="https://www.cineya.site/contacto">Cineya@cineya.site</a>
            <div class="copyright">
            </div>
        </div>
	</div>
	</div>
	<div class="clearfix"></div>
</body>
</html>