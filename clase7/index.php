<?php
session_start();
if(isset($_SESSION['user'])){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CONTENIDO</title>
	</head>
	<body>
		<p align="right">
			<?php
			//para aceder al nombre de usuario por medio de la session
			echo "| Usted se a logeado com:". $_SESSION["user"]["nombre"]."|";
			?>
			<a href="login.php?cerrar=true">Cerrar Sesion</a>
		</p>
		<?php
		//para mostrar contenido por nivel de acceso
		if($_SESSION["user"]["nivel_acceso"]==1) {
			echo "<h1>Contenido ADMIN</h1>";
		} else {
			echo "<h1>Contendo Generico</h1>";
		}
		?>
	</body>
	</html>
	<?php
}
else{
	header("location:login.php");
}
?>
