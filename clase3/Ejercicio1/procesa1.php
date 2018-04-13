<?php
$p=$_POST["txtCapital"];//Capital
$i=0.06;//Tasa
$n=4;//tiempo


$in=$p*$i*$n;//calcular el interez
$ca=$p+$in;

echo "Interez: $ $in <br>
	Capital: $ $p <br>
	Taza: $ $i <br>
	Tiempo: $n años <br>
	Capital acumulado: $ $ca";
?>