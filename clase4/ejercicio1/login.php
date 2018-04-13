<?php 
session_start();
	
	if (isset($_REQUEST["cerrar"])) {
		session_destroy();
		
	}

	if (isset($_REQUEST["btnInicio"])) {
		$us=$_REQUEST["txtUsuario"];
		$pass=$_REQUEST["txtClave"];

	if (isset($_COOKIE[$us]) && $_COOKIE[$us]==$pass) {
		$_SESSION["registrado"]=$us;
		
		header("Location:inicio.php?");	
	}else{
		echo "Usuario no reguistrado";
	}

		
		
	}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<h1>Login</h1>
<body>
	<form method="POST">
		Usuario:<input type="text" name="txtUsuario"><br>
		Clave:<input type="text" name="txtClave"><br>
		<input type="submit" name="btnInicio" value="Iniciar">
	</form>

</body>
</html>