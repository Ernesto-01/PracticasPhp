<?php 
if (isset($_REQUEST["btnEnviar"])){

	$nombre=$_REQUEST["txtNombre"];
	$correo=$_REQUEST["txtCorreo"];
	$nac=$_REQUEST["txtNacionalidad"];
	$edad=$_REQUEST["txtEdad"];
	$fechaNacimiento=$_REQUEST["txtFechaNacimiento"];

	
	$color=$_REQUEST["txtColorFavorito"];
	$genero="";
	$chBarca="";
	$chMadrid="";
	$chPSG="";

	if(isset($_REQUEST["rdGenero"])){
		$genero=$_REQUEST["rdGenero"];
	}
	
	if(isset($_REQUEST["chBarcelona"])){
		$chBarca=$_REQUEST["chBarcelona"];
	}
	if(isset($_REQUEST["chRealmadrid"])){
		$chMadrid=$_REQUEST["chRealmadrid"];
	}
	if(isset($_REQUEST["chPSG"])){
		$chPSG=$_REQUEST["chPSG"];
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>Nombre:</td>
			<td><?php echo $nombre; ?></td>
		</tr>
		<tr>
			<td>Correo electronico: </td>
			<td><?php echo $correo; ?></td>
		</tr>
		<tr>
			<td>Nacionalidad</td>
			<td><?php echo $nac; ?></td>
		</tr>
		<tr>
			<td>Edad</td>
			<td><?php echo $edad; ?></td>
		</tr>
		<tr>
			<td>Fecha nacimiento</td>
			<td><?php echo $fechaNacimiento; ?></td>
		</tr>
		<tr>
			<td>Genero</td>
			<td><?php echo $genero; ?></td>
		</tr>
		<tr>
			<td>Color favorito</td>
			<td><input type="color" value=<?php $color; ?>></td>
		</tr>
		<tr>
			<td>Equipo de futbol preferido</td>
			<td><?php echo "$chBarca $chMadrid  $chPSG" ; ?></td>
		</tr>
		<tr>
			<td colspan="2">
				<a href=""></a>
			</td>
		</tr>
	</table>
</body>
</html>