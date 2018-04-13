<?php

//incluye el archivo
include "conceptos.php";

//incluye el archivo solo una vez
//include_once "conceptos.php";

//es requerido el archivo
//require "conceptos.php";

//es requerido el archivo solo una vez
//require_once "conceptos.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<h1>Fromulario</h1>
		<form action="#" method="POST">
			<input type="text" name="txtMarca" placeholder="Marca" size="50"><br>
			<input type="text" name="txtModelo" placeholder="Modelo" size="50"><br>
			<input type="text" name="txtAño" placeholder="Año" size="50"><br>
			<input type="text" name="txtPrecio" placeholder="Precio" size="50"><br>
			<input type="submit" name="btnEnviar" value="Cargar Obj">
		</form><hr>
	</center>
	<?php
		if (isset($_REQUEST["btnEnviar"])) {
			$marca=$_REQUEST["txtMarca"];
			$modelo=$_REQUEST["txtModelo"];
			$año=$_REQUEST["txtAño"];
			$precio=$_REQUEST["txtPrecio"];

			$obj=new Vehiculo();			
			$obj->setMarca($marca);
			$obj->setModelo($modelo);
			$obj->setAño($año);
			$obj->setPrecio($precio);
			
			echo $obj->getInfo();
		}


	?>
</body>
</html>