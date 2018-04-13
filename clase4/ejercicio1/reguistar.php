<?php


	if (isset($_REQUEST["btnReguistrar"])) {
		$usuario=$_REQUEST["txtUser"];
		$clave=$_REQUEST["txtClave"];
		
		
			
		if($_COOKIE[$_REQUEST["txtUser"]]){
			echo "El usario ya existe";
		}else{
			setcookie($usuario,$clave,time()+3600);
			
		}
		

		//header("Location:login.php?");	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<h1>Reguistrar</h1>
<body>
	<form action="#">
	Nombre:
	<input type="text" name="txtUser"><br>
	Contraseña:
	<input type="password" name="txtClave"><br>
	<input type="submit" name="btnReguistrar" value="Reguistrar">
	</form>

</body>
</html>
