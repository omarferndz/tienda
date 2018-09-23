<div class="panel panel-primary">

	<div class="panel-heading">
		<h4 class="text-center"> Productos en liquidacion</h4>
	</div>

	<div class="row">
	<?php
//leer una tabla
		$wsqli= "SELECT  idproducto FROM productos WHERE idtipoproducto = 3 ORDER BY rand() LIMIT 6";//cursor
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



	<div class="col-sm-2 col-md-2 col-lg-2 ">
	
		<div class="thumbnail text-center resaltar">
			<img src="img/imgpro/f<?php echo $idf ?>.jpg" class="img-responsive img-thumbnail">
			<a href="#" class="btn btn-danger btn-xs btn-block">Ver detalle</a>
		</div>
 	</div>
		 <?php
		}

		?>



</div>
</div>