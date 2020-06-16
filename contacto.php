<?php
 include ('header.html');
   ?>  
     
<!DOCTYPE html>
<html>

<body>
	<!-- header-section-starts -->
	<div class="full">
			
		<div class="main">
		<div class="contact-content">
		 <div class="top-header">
				<div class="logo">
					<a href="index"><img src="images/logos.png" alt="" /></a>
					<p>CineYa</p>
				</div>
                <!--el buscador-->
				
				<div class="clearfix"></div>
			</div>
			<!---contact-->
<div class="main-contact">
		 <h3 class="head">CONTACTO</h3>
		 <h3>Estamos para ayudarte</h3>
		 <div class="contact-form">
			 <form action="enviar.php" method="post">
				 <div class="col-md-6 contact-left">
					  <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="correo" placeholder="Correo" required>
                <input type="text" name="asunto" placeholder="Asunto" required>
                 </div>
				  <div class="col-md-6 contact-right">
					 <textarea name="Mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
					 <input type="submit" value="ENVIAR" id="boton">
				 </div>
				 <div class="clearfix"></div>
			 </form>
	     </div>
		
</div>
	<div class="footer">   
		<h6>CineYa </h6>
		<p class="claim">Descarga la aplicacion mobile</p>
		<a href="contacto.php">administrador@cineya.site</a>
		<div class="copyright">
        </div>
	</div>	
	</div>
	<div class="clearfix"></div>
	</div>
    </div>
</body>
</html>