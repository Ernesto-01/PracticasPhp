<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h3>Formulario de registro</h3>
	<hr>
	<form method="POST" action="destino.php">
	<table>
	<tr>
		<td>Nombre:</td>
		<td><input type="text" name="txtNombre"></td>
	</tr>
	<tr>
		<td>Correo electronico</td>
		<td><input type="email" name="txtCorreo"></td>
	</tr>
	<tr>
		<td>Nacionalidad</td>
		<td><select name="txtNacionalidad">
			<option value="Salvadoreño">Salvadoreño</option>
			<option value="Guatemalteco">Guatemalteco</option>
			<option value="Hondureño">Hondureño</option>
		</select></td>
	</tr>
	<tr>
		<td>Edad:</td>
		<td><input type="number" name="txtEdad"></td>
	</tr>
	<tr>
		<td>Fecha nacimiento:</td>
		<td><input type="date" name="txtFechaNacimiento"></td>
	</tr>
	<tr>
		<td>Genero:</td>
		<td><input type="radio" name="rdGenero" value="Masculino" >Masculino
		    <input type="radio" name="rdGenero" value="Femenino">Femenino
		</td>
	</tr>
	<tr>
		<td>Color favorito:</td>
		<td><input type="color" name="txtColorFavorito"></td>
	</tr>
	<tr>
		<td>Equipo de futbol preferido:</td>
		<td>
			<input type="checkbox" name="chBarcelona"  value="Barcelona">Barcelona
			<input type="checkbox" name="chRealmadrid"  value="Realmadrid">Ralmadrid
			<input type="checkbox" name="chPSG"  value="PSG">PSG
		</td>
	</tr>
	<tr>
		
		<td colspan="2">
			<center>
				<input type="submit" name="btnEnviar" value="Enviar">
			</center>
		</td>
		
	</tr>
	</table>
	</form>
	</center>
</body>
</html>