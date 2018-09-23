<?php	
$linki = new mysqli("localhost","omar","123","tienda"); //tuberia de conexion entra la base de datos y el lenguaje
$linki -> query("SET CHARACTER Set utf8");//trabaja con ñ y con acentos
	if (mysqli_connect_errno()){
		die("No se pudo conectar con la base de datos".mysqli_connect_error());
	}
	else{
	//echo "se conecto con exito";
	}
?>