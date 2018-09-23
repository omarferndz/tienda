<div class="panel panel-primary ">
	<div class="panel-heading">
		Ofertas Especiales
	</div>

	<div class="panel-body">
	<?php
//leer una tabla
	$wsqli= "SELECT  idproducto, nombre, precio FROM productos WHERE idtipoproducto = 2 ORDER BY rand() LIMIT 3";//cursor
		$result= $linki -> query($wsqli);
		if ($linki -> errno) die ($linki->error);
		while ($row=$result->fetch_array()){
			
			$id = $row["idproducto"];
			
			$wsqli2= "SELECT * FROM rproductofoto WHERE idproducto = '$id' LIMIT 1";
			$result2= $linki -> query($wsqli2);
			if ($linki -> errno) die ($linki->error);
			$idf=0;
			if ($row2=$result2->fetch_array()){ /*para que me traiga una sola*/
				$idf=$row2['idproductofoto'];
			}

	?>
	<div class="thumbnail text-center resaltar">
	<img src="img/imgpro/f<?php echo $idf ?>.jpg " class="img-responsive img-thumbnail">
	 <h5 class="text-primary"><?php echo $row["nombre"]?></h5>
	 <h4 class="text-danger"><?php echo $row["precio"]?></h4>
	 <a href="#" class="btn btn-danger btn-xs btn-block">Ver detalle</a>
	</div>
	<?php
		}

	?>

</div>

</div>