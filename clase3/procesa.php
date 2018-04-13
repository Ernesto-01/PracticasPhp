<?php

$nombre=$_POST["txtNombre"];
$sal_hora=$_POST["txtSal"];
$horas=$_POST["txtHoras"];

$salario=$sal_hora*$horas;

echo "Los datos ingresados son: <br>
	Nombre: $nombre <br>
	Salario: $sal_hora <br>
	Horas trabajadas: $horas <br>
	<b>Salario total: $ $salario</b>";
?>