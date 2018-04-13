<?php
$l=array("tw"=>array("mat"=>(10,6,8),"ING"=>(4,8,10,7,9,10)));
$lista =array("Teoria"=>
			array("Matematicas"=>
				array(10,10,10,10),
			"Sociales"=>
				array(10,10,10,10)),

		"Paractica"=>
			array("Matematicas"=>
				array(10,10,10,10),
			"Sociales"=>
				array(10,10,10,10)));

foreach ($lista as $pa1 => $v1) {
	echo "<br><b>".$pa1."</b> <br>";
	$ac=0;
	$nft=0;
	$nfp=0;
	$nf=0;
	$nfc=0;
	$t1=0;
	$t2=0;
	foreach ($v1 as $pa2 => $v2) {
		echo '<br> Materia:' .$pa2.'<br>';

		foreach ($v2 as $pa3 => $va) {

			if ($pa3==0) {
				$ponderacion=0.40;
			}elseif ($pa3==1) {
				$ponderacion=0.60;
			}elseif ($pa3==2) {
				$ponderacion=0.20;
			}elseif ($pa3==3) {
				$ponderacion=0.80;
			}

			echo "Nota". $n=$pa3+1 . " es:". $c=$va*$ponderacion . " <br>";
			$ac=$c+$ac;
		}  

		if ($pa1=="Teoria") {
			$nft=0.3*$ac/4;

		}else{
			$nfp=0.7*$ac/4;
		}

	}
		if ($nft >0) {
			
			echo "Nota final".$pa2.":".$t1=$nft*3.3333333333333333;
		}
		if ($nfp >0 ) {
			
			echo "Nota final".$pa2.":".$t2=$nfp*14.28571428571428/10;			
		}
		$nfc=$nfc+$t1+$t2;	
		

}
echo "<BR> $nfc";


?>