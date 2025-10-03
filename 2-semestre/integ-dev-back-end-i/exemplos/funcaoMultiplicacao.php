<?php

function soma($a,$b){
	$adicao = $a+$b;
	return $adicao;
}

function subtracao($a,$b){
	$diminuir = $a-$b;
	return $diminuir;
}


function multiplicacao($c,$d){
		$mul = $c*$d;
		return $mul;
}

/*  PROGRAMA PRINCIPAL */

$a = 20;
$b = 10;

echo "Resultado da soma: ".soma($a,$b)."<br>";
echo "Resultado da subtração:".subtracao($a,$b)."<br>";
$c = soma($a,$b);
$d = subtracao($a,$b);

echo "Resultado da multiplicacao: ".multiplicacao($c,$d);
?>