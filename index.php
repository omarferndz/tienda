<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tienda Online en PHP</title>
</head>
 <link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

<body>
			<?php include_once("config/conexion.php") ?>
	
	<header>
			<?php include_once("fronted/encabezado.php") ?>
	</header>
	<nav>
			<?php include_once("fronted/menu.php") ?>
	</nav>
		
		<main>
			<section id="princial"> 
				<div class="container-fluid" style="margin-top:5px">
		<div class="row">
						<div class="hidden-xs col-sm-4 col-md-3 col-lg-2">

							<div class="row">
								
					<?php include_once("fronted/categorias.php") ?>

					<?php include_once("fronted/marcas.php") ?>

					<?php include_once("fronted/ubicacion.php") ?>
								
					<?php include_once("fronted/ofertas_esp.php") ?>

								
					    
					 </div>
					 
				</div>
					
			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 ">
						
				<?php include_once("fronted/carousel.php") ?>
				
<!----------IZQUIERDA------------ Controles-------------DERECHA----------------->
				
				<?php include_once("fronted/productos.php") ?>
				
			</div>
		</div>
	</div>
		</section>
		
		<section id="destacados">
			
				<?php include_once("fronted/listado_productos.php") ?>
				
			</section>
		<hr>
		
		<footer style="height:250px; background: #00000">
		
				<?php include_once("fronted/piedepagina.php") ?>
		
  	
  </footer>
</main>
		
		
		
	<script src="js/jquery_local.js"></script>
    <script src="js/bootstrap.min.js"> </script>
    
</body>
</html>