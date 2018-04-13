<?php

session_start();

if (isset($_REQUEST["btnCerrarSesion"])) {
	session_unset();
	
}

if(isset($_REQUEST["btnEliminarCookie"])){
	setcookie("cookieUsuario","",time()-1);
	setcookie("cookieClave","",time()-1);
}

/*
$usuario=$_REQUEST["user"];
$clave=$_REQUEST["contra"];
echo "Usuario:". $usuario . "<br> Contraseña:".$clave;
*/
$usuario="";
$clave="";
if (isset($_SESSION["user"]) && isset($_SESSION["contra"])) {
	$usuario = $_SESSION["user"];
	$clave = $_SESSION["contra"];
}elseif (isset($_COOKIE["cookieUsuario"]) && 
		isset($_COOKIE["cookieClave"])) {
		
		$usuario=$_COOKIE["cookieUsuario"];
		$clave=$_COOKIE["cookieClave"];
	

}else{
	echo "La sesion no sea creado ni tampoco las cookies";
}


echo "Los datos ingresados fueron: <br>
		usuario: $usuario <br> 
		clave: $clave ";


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#">
		<input type="submit" name="btnCerrarSesion" value="Cerrar sesion">
		<input type="submit" name="btnEliminarCookie" value="EliminarCookie">
	 </form>
</body>
</html>
