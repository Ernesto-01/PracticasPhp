<?php

session_start();

	if (isset($_REQUEST["btnEnviar"])) 
	{
			$usario=$_REQUEST["txtUsuario"];
			$clave=$_REQUEST["txtClave"];

			$_SESSION["user"]=$usario;
			$_SESSION["contra"]=$clave;

			setcookie("cookieUsuario",$usario,time()+3600);
			setcookie("cookieClave",$clave,time()+3600*24);

			header("Location:destino.php?");
			//header("Location:destino.php?user=$usario&contra=$clave");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="GET">
		Usuario: <input type="text" name="txtUsuario"><br>
		Contraseña:
		<input type="password" name="txtClave"><br>
		<input type="submit" name="btnEnviar" value="Ir a destino">

	</form>

</body>
</html>