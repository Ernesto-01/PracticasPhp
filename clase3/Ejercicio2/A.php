<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio2</title>
</head>
<body>
	<form id="frm" method="get" action="B.php">
		<table>

			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="txtNombre" id="txtNombre"></td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" name="txtApellido" id="txtApellido"></td>
			</tr>
			<tr>
				<td>Edad:</td>
				<td><input type="number" name="txtEdad" id="txtEdad" step="1" min="18"></td>
			</tr>
			<tr>
				<td>Genero</td>
				<td>
					<input type="radio" name="rdGenero" id="rdGenero" value="Masculino">Masculino
					<input type="radio" name="rdGenero" id="rdGenero" value="Femenino" >Femenino</td>
			</tr>
			<tr>
				<td>Salario</td>
				<td><input type="number" name="txtSalario" id="txtSalario">
			</tr>
			
			<tr>
				<td colspan="2"><input type="submit" name="btnEnviar" id="btnEnviar" value="Procesar"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>