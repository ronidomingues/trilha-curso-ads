<?php
/* Calcule a soma dos números inteiros de 1 a 10 - com for */
$soma = 0;
for ($n = 1; $n <= 10; $n++)
{
    $soma = $soma + $n;
}
echo "A soma é ".$soma;
?>