<?php
/* Calcule a soma dos números inteiros de 1 a 10 - com do-while */
$n = 1;
$soma = 0;
do
{
    $soma = $soma + $n;
    $n = $n+1;
} while ($n <= 10)
echo "A soma é ".$soma;
?>