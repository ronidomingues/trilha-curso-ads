<?php
/* Faça um programa que mostre na tela apenas os números ímpares entre 1 e 10. */
$i = 1;
echo "Os números ímpares entre 1 e 10 são:";
while ($i <= 10)
{
    if ($i % 2 != 0)
    {
        echo "<br>".$i;
    }
    $i++;
}

?>