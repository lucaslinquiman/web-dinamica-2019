<!DOCTYPE html>
<html>
<head>
	<title>Tiempos de Barro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">

	<script src="js/carousel/jquery.min.js"></script>
	<script src="js/carousel/popper.min.js"></script>
	<script src="/js/carousel/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="cabecera">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand titulo" href="#">
				Tiempos de barro
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			<ul class="navbar-nav ml-auto">
					<li>
      					<a class="nav-link" href="#">Login</a>
      				</li>
    			</ul>
  			</div>
		</nav>
		</div>
		<div class="menu bordes">
			<ul class="nav nav-tabs justify-content-center">
				<li class="nav-item">
				    <a class="nav-link active" href="#">Inicio</a>
 				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#">Nosotros</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#">Catalogo</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#">Galeria de Imágenes</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="#">Contacto</a>
  				</li>
			</ul>
		</div>
		<div class="slider">
			<div id="sliders" class="carousel slide" data-ride="carousel">

  			<!-- Indicators -->
  				<ul class="carousel-indicators">
    				<li data-target="#sliders" data-slide-to="0" class="active"></li>
    				<li data-target="#sliders" data-slide-to="1"></li>
    				<li data-target="#sliders" data-slide-to="2"></li>
  				</ul>

  			<!-- The slideshow -->
  				<div class="carousel-inner">
    				<div class="carousel-item">
      					<img src="images/img05.jpg" alt="img05">
    				</div>
    				<div class="carousel-item active">
      					<img src="images/img06.jpg" alt="img06">
    				</div>
    				<div class="carousel-item">
      					<img src="images/img03.jpg" alt="img03">
    				</div>
  				</div>

 				<!-- Left and right controls -->
  				<a class="carousel-control-prev" href="#sliders" data-slide="prev">
    				<span class="carousel-control-prev-icon"></span>
  				</a>
  				<a class="carousel-control-next" href="#sliders" data-slide="next">
    				<span class="carousel-control-next-icon"></span>
  				</a>

			</div>

		</div>
		<div class="contenido">
			<p>
				<img src="images/header_tiemposb.jpg">
				<br>
				<i>Tiempos de Barro</i>, se dedica a la produccion de Ceramica Artesanal. Trabajamos con la mejor materia prima, para que nuestros clientes puedan recibir el mejor producto final en su hogar.<br>
			</p>
		</div>
		<div class="widget_01">widget_01</div>
		<div class="widget_02">widget_02</div>
		<div class="pie">
			<div class="card-footer text-muted text-center">
			<?php
                require_once 'php/footer.php';
            ?>
  			</div>
		</div>
	</div>
</body>
</html>