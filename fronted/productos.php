<div class="panel panel-primary">
				
		<div class="panel-heading">
			<h4 class="text-center"> Listados de Productos</h4>
		</div>
<div class="row">
	<?php
		$filtro="";
		if(isset($_GET['idc'])){
			$idc=$_GET['idc'];
			$filtro="WHERE idcategoria='$idc'";
		}
		if(isset($_GET['idm'])){
			$idm=$_GET['idm'];
			$filtro="WHERE idmarca='$idm'";
		}
			
		
		$wsqli= "SELECT  idproducto, nombre, precio, descripcion FROM productos $filtro ORDER BY idproducto desc";//cursor
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

	
	<div class="col-sm-6 col-md-4 col-lg-3 ">
		<div class="thumbnail text-center resaltar">
			<img src="img/imgpro/f<?php echo $idf ?>.jpg" class="img-responsive img-thumbnail">
			   	<h5 class="text-primary"><?php echo $row["nombre"]?></h5>
			   	
	 			 <small><h5 class="text-primary"><?php echo substr($row["descripcion"],0,20)?>...</h5></small>
				 <h4 class="text-danger"><?php echo $row["precio"]?></h4>
			<a href="#" class="btn btn-danger btn-xs btn-block">Ver detalle</a>
		</div>
	 </div>

	
	<?php
		}
	?>
</div>

	<div class="panel-footer">
				<nav class="text-center">
				  <ul class="pagination">
					<li>
					  <a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					  </a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li>
					  <a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					  </a>
					</li>
				  </ul>
				</nav>
			</div>
	</div>