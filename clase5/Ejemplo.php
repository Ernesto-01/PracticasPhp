<?php

//selectivas
//imprime 

$edad=34;

if($edad<=18) {
	echo "Mayor de edad";
}else{
	echo "Menor de edad";
}

echo "<br>";

//selectiva anidadas
//imprime el mayor de 3 numeros dados
$n1=45;
$n2=12;
$n3=13;
if($n1 > $n2 && $n1 > $n3) {
	echo "Mayor:".$n1 ;
}elseif ($n2 > $n1 && $n2 > $n3) {
	echo "Mayor:".$n2 ;
}else{
	echo "Mayor:".$n3 ;
}

echo "<br>";

//l

$numsem=4;
echo "Dia de la semana: ";

	switch ($numsem) {
		case 1:
			echo "Domiengo";
		break;
		case 2:
			echo "Lunes";
		break;
		case 3:
			echo "Martes";
		break;
		case 4:
			echo "Miercoles";
		break;
		case 5:
			echo "Jueves";
		break;
		case 6:
			echo "Viernes";
		break;
		case 7:
			echo "Sabado";
		break;
		default:
			echo "Numero no valido";
		break;
	}
echo "<br>";
	
	//iterativas
	//iterativa finita
	//imprimir la tabla de multiplicacion
	// 5*1=5
$t=6;
	for($i=1; $i <=10 ; $i++) { 
		echo $t." X ". $i ." = ". $t*$i ."<br>";
	}

echo "<br>";
$x=1;
while ($x <= 10) {
	echo $t." X ". $x ." = ". $t*$x ."<br>";
	$x++;
}
echo "<br>";
//lomismo pero con Do Wjile
$j=1;
do {
	echo $t." X ". $j ." = ". $t*$j ."<br>";
	$j++;
} while ( $j <= 10);

echo "<br>";
//Arreglos
//areglos simples unidimencionales
//indexados por numeros

//1 froma
$persona=array("Fabio","Samuel",100);
//echo $persona[1];

for ($k=0; $k <=2 ; $k++) { 
	echo $persona[$k]."<br>";
}

echo "<br>";

foreach ($persona as $key => $value) {
	echo "Persona['$key']=$value <br>";
}

echo "<br>";
print_r($persona);


//Arreglo asociativo

$alumno=array("Veronica"=>19,"Kevin"=>4,"Emerson"=>3,10=>"Hola");
echo "<br>";
echo "Veronica usa la PC #". $alumno["Veronica"];

echo "<br><br>";

foreach ($alumno as $indice => $valor) {
	echo "Alumn@: ".$indice ."usa PC # ". $valor . "<br>";
}

print_r($alumno);
echo "<br><br>";


//array mutidimencional asociativo
$producto=array("Javon"=>array("cant"=>2,"precio"=>0.5),
	"Rinso"=>array("cant"=>12,"precio"=>0.25),
	"Arroz"=>array("cant"=>1,"precio"=>1.25));

$producto["maruchan"]["cant"]=2;
$producto["maruchan"]["precio"]=1.5;

foreach ($producto as $p => $v1) {
	echo "Producto:".$p."<br>";
	foreach ($v1 as $cp => $v2) {
		echo $cp.": ". $v2."<br>";

		
	}
	echo "<hr>";

}
print_r($producto)
?>