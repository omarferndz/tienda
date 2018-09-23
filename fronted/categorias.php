<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="text-center"> Categorias </h4>
	</div>

	<div >
		<h3 class="text-center"> </h3>
		<?php
			//leer una tabla
		$wsql= "SELECT categorias.idcategoria,categorias.nombre,count(cantidad) as cp
					FROM productos
					INNER JOIN categorias
					on productos.idcategoria=categorias.idcategoria
					GROUP BY categorias.idcategoria
					ORDER BY categorias.nombre";//cursor
		$result= $linki -> query($wsql);
		if ($linki -> errno) die ($linki->error);
		while ($row=$result->fetch_array()){
			
		
		?>
		<a href="?idc=<?php echo $row["idcategoria"] ?>" class="list-group-item"><span class="badge"><?php echo $row["cp"] ?></span> <?php echo $row["nombre"] ?></a>
		<?php
		}
		?>	
		
	</div>
	<div class="panel-footer">
		<h3 class="text-center"> </h3>
		<a href="index.php" class="btn btn-danger btn-block">
		Ver todos
		</a>
	</div>

</div>