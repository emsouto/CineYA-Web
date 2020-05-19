<?php


include ("conexion.php");
?>

 <title>CINE YA</title>
 <style type="text/css">
     body{
     background-color: white;
     background-attachment: fixed;}


</style>
 
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src="js/multiple-image-slider.js"></script>
 <div class="col-md-12"
 >
<div class="carousel slide multi-image-slider" id="theCarousel"
style="
    white-space: break-spaces;
margin:auto">
<div class="carousel-inner">
	
<?php
$sqlQuery = "SELECT Nombres, Url ,Genero,Tipo FROM iniciopelis";
$resultSet = mysqli_query($conexion, $sqlQuery);
$setActive = 0;
$sliderHtml = '';
while( $sliderImage = mysqli_fetch_assoc($resultSet)){
$activeClass = "";
if(!$setActive) {
$setActive = 1;
$activeClass = 'active';
}
$sliderHtml.= "<div class='item ".$activeClass."'>";
$sliderHtml.= "<div class='col-xs-12'>";
$sliderHtml.= "<img src='".$sliderImage['Url']."' class='img-responsive'>";
$sliderHtml.="<div class='carousel-caption d-none d-md-block'>";
$sliderHtml.="<h1>".$sliderImage['Nombres']."</h1>"	;
$sliderHtml.="<p>".$sliderImage['Genero'].$sliderImage['Tipo']."<p>";
$sliderHtml.= "</div></div></div>";
}
echo $sliderHtml;
?>
</div>
<a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
<a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>

