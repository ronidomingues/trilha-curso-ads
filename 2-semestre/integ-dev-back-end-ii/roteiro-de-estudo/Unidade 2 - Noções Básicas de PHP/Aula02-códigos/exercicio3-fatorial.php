<?php
/*
Faça um programa que calcule o fatorial de números inteiros fornecido pelo usuário. O algoritmo só é encerrado, se o usuário digitar um número negativo.
Exemplo de cálculo de fatorial: 5!=5.4.3.2.1=120
 */
do
{
    $entrada = readline("\n\nDigite um número: ");
    $numero = intval($entrada);
    $fatorial = 1;
    $indice = $numero;
    while ($indice > 1)
    {
        $fatorial = $fatorial * $indice;
        $indice--;
        
    }
    if ($numero >= 0)
    {
        
      echo "O fatorial de ".$numero." é: ".$fatorial;
    }
    
} while ($numero >= 0)
?>