<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="/jquery.js">
			$(function(){
				$("#btnEnviar").click(function(){
					var url="damedatos.php";
					$.ajax({
						type: "POST",
						url:url,
						data: $("#frm1").serialize
					});
				});
			});

	</script>
</head>
<body>
	<form method="post" id="frm1">
		Ingrese nombre:
		<input type="text" name="nombre"><br>
		Ingrese apellido:
		<input type="text" name="apellido"><br>
		<input type="button" name="btnEniarDatos" id="btnEnviar" value="Enviar Datos">

	</form>
</body>
</html>