<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="text-center"> Ubicacion </h4>
	</div>

	<div >
		<h3 class="text-center"> </h3>

			<?php
				//leer una tabla
				$wsql= "SELECT ubicacion.idubicacion,ubicacion.nombre,count(cantidad) as cp
				FROM productos
				INNER JOIN usuarios
				on productos.idusuario=usuarios.idusuario
				INNER JOIN ubicacion
				on usuarios.idubicacion=ubicacion.idubicacion
				GROUP BY ubicacion.idubicacion
				ORDER BY ubicacion.nombre";//cursor
				$result= $linki -> query($wsql);
				if ($linki -> errno) die ($linki->error);
				while ($row=$result->fetch_array()){


				?>

				<a href="?idu=<?php echo $row["idubicacion"] ?>" class="list-group-item"><span class="badge"><?php echo $row["cp"] ?></span> <?php echo $row["nombre"] ?></a>
				<?php
				}
				?>
				  
	</div>

	<div class="panel-footer">
		<h3 class="text-center"> </h3>
		<a href="index.html" class="btn btn-danger btn-block">
			Ver todos
		</a>
	</div>

</div>