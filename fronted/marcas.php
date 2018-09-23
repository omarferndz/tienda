<div class="panel panel-primary">

		<div class="panel-heading">
			<h4 class="text-center"> Marcas </h4>
		</div>

		<div >
			<h3 class="text-center"> </h3>

				<?php
				//leer una tabla
				$wsql= "SELECT marcas.idmarca,marcas.nombre,count(cantidad) as cm
				FROM productos
				INNER JOIN marcas
				on productos.idmarca=marcas.idmarca
				GROUP BY marcas.idmarca
				ORDER BY marcas.nombre";//cursor
				$result= $linki -> query($wsql);
				if ($linki -> errno) die ($linki->error);
				while ($row=$result->fetch_array()){


				?>

				<a href="?idm=<?php echo $row["idmarca"] ?>" class="list-group-item"><span class="badge"><?php echo $row["cm"] ?></span> <?php echo $row["nombre"] ?></a>
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