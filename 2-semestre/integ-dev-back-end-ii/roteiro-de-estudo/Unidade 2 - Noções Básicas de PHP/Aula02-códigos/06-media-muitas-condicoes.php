<?php
/* Considerando algoritmo anterior (da média), complemente com uma estrutura condicional que exiba em tela as seguintes informações
“Aprovado com louvor”, se a média for maior ou igual a 90
“Aprovado com boa nota”, se a média for maior ou igual a 70 e menor que 90
“Aprovado na média”, se a média for maior ou igual a 60 e menor que 80
“Em recuperação”, se a média for maior ou igual a 40 e menor que 60
“Reprovado”, se a média for menor que 40
 */

$n1 = 100;
$n2 = 85;
$media = ($n1 + $n2)/2;
echo 'A média é: '. $media. '. Você está: ';
if ($media >= 90) 
    echo "Aprovado com louvor";
elseif ($media >= 70 && $media < 90)
    echo "Aprovado com boa nota";
elseif ($media >= 60 && $media < 80)
    echo "Aprovado na média";
elseif ($media >= 40 && $media < 60) 
    echo "Em recuperação";
else
    echo "Reprovado";
?>