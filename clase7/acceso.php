<?php
session_start();
include "credenciales.php";

if(isset($_REQUEST['btnIngresar'])){
	$usuario=$_REQUEST['txtNombre'];
	$contra=$_REQUEST['txtContaseña'];

	try {
		$con=new mysqli(SERVIDOR,USUARIO,CONTRASEÑA,DB);
		$sql="select nombre,nivel_acceso from usuarios where username='$usuario' and pass='$contra'";
		$resultado=$con->query($sql);

		//es para saver cuantos registros trae una consulta
		$cant= mysqli_num_rows($resultado);

		if($cant==1){
			while ( $fila = $resultado->fetch_assoc()) {
				$nombre=$fila["nombre"];
				$nivel=$fila["nivel_acceso"];
			}

			$_SESSION['user']["nombre"]=$nombre;
			$_SESSION['user']["nivel"]=$nivel;

			header("location:index.php");

		}

	} catch (Exception $e) {

			header("location:login.php");
	}
}else{

	header("location:login.php");

}
if(isset($_REQUEST["cerrar"])){
	session_destroy();
	header("location:login.php");
}
?>