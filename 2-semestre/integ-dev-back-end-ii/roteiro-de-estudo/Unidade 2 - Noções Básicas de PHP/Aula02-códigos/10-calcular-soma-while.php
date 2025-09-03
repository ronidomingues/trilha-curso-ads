<?php
/* Calcule a soma dos números inteiros de 1 a 10 - com while */

$n = 1;
$soma = 0;
while ($n <= 10)
{
    $soma = $soma + $n;
    $n = $n+1;
}
echo "A soma é ".$soma;
?>