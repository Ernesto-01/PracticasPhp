<!DOCTYPE html>
<html >
<head >
<meta charset="utf-8">
<!--<meta name="viewport" content="width=device-width,initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$(function()
		{
			$("#btnEnviar").click(function()
			{
				var vurl="procesa.php";
				$.ajax(
				{
					type:"POST",
					url:vurl,
					data:$("#frm").serialize(),
					success:function(data){
						$('#resultado').html(data);
					}
				});
			});

		});

</script>
	<title>Ejemplo 2</title>
</head>
<body>
	<center>
		<form id="frm" >
			<table>
				<tr>
					<td>Nombre Completo</td>
					<td><input type="text" name="txtNombre" id="txtNombre"></td>
				</tr>
				<tr>
					<td>Salario por hora</td>
					<td><input type="text" name="txtSal" id="txtSal"></td>
				</tr>
				<tr>
					<td>Horas trabajadas</td>
					<td><input type="text" name="txtHoras" id="txtHoras"></td>
				</tr>
				<tr>					
					<td colspan="2"><input type="button" id="btnEnviar" value="Procesar"></td>
				</tr>
			</table>
		</form>
	</center>

	<div id="resultado">
		
	</div>

</body>
</html>