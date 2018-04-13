<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
		$(function()
		{
			$("#btnEnviar").click(function()
			{
				var destino="procesa1.php";
				$.ajax(
				{
					type:"POST",
					url:destino,
					data:$("#frm1").serialize(),
					
					success:function(data)
					{
						$('#resultado').html(data);
					}
				});
			});
		});
	</script>
	<title>Ejecicio1</title>
</head>
<body>
	<h1>Calcular intereces para cuatro años</h1>
<form id="frm1">

	<table>
		<tr>
			<td>Capital: $</td>
			<td><input type="text" name="txtCapital" id="txtCapital"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="button" id="btnEnviar" value="Prosesar"></td>
		</tr>
	</table>
	
</form>
<dir id="resultado"></dir>

</body>
</html>