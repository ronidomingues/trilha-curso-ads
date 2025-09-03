<?php
/* Considerando algoritmo anterior (da média), complemente com uma estrutura condicional que exiba em tela “Aprovado”  caso a média seja maior que 6 e “Reprovado”, caso contrário. */

$n1 = 85.8;
$n2 = 10;
$media = ($n1 + $n2)/2;

if ($media >= 60)
    echo 'Aprovado!';
else
    echo 'Reprovado!';

?>