<?php

session_start();



if (isset($_SESSION["registrado"])) {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	usted se ha logueado como <?php echo $_SESSION["registrado"]; ?>
	<a href="login.php?cerrar=true">Cerrar Session</a>
</body>
</html>


<?php
	
}else{

header("location:login.php");
}
?>