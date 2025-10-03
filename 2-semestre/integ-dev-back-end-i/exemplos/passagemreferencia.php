<?php

function dobro($valor){
	$valor = 2*$valor;
	echo $valor."<br>";	
}

function duplica(&$valor){
	$valor = 2*$valor;
}

$valor = 5;
echo $valor."<br>";
dobro($valor);
echo $valor."<br>";
duplica($valor);
echo $valor."<br>";

?>