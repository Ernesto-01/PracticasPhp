<?php
if(isset($_REQUEST["btnEnviar"])){

	$nombre=$_REQUEST["txtNombre"];
	$apellido=$_REQUEST["txtApellido"];
	$edad=$_REQUEST["txtEdad"];
	$genero=$_REQUEST["rdGenero"];
	$salario=$_REQUEST["txtSalario"];






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Reguistro</h2>            
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Genero</th>
        <th>Salario</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $nombre; ?></td>
        <td><?php echo $apellido; ?></td>
        <td><?php echo $edad; ?></td>
        <td><?php echo $genero; ?></td>
        <td><?php echo $salario; ?></td>
      </tr>


    </tbody>
  </table>

<!--<a href="C.php?txtNombre=<?php $nombre ?>&txtApellido=<?php $apellido ?>&txtEdad=<?php $edad ?>&rdGenero=<?php $genero ?>&txtSalario=<?php $salario ?>" class="btn btn-info" > Mi enlace</a>
-->
<?php
echo "<a href='C.php?txtNombre=$nombre&txtApellido=$apellido&txtEdad=$edad&rdGenero=$genero&txtSalario=$salario' class='btn btn-info' > Mi enlace </a>";
?>
<!-- <a href="c.php?v1=<?php $nombre ?>&v2=<?php $apellido ?>&v3=<?php $edad ?>&v4=<?php $genero ?>&v5=<?php $salario ?>" class="btn btn-info">Mostrar datos de la paguina a</a> -->
</div>

</body>
</html>
<?php

}
?>

