<?php
include "conceptos.php";

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