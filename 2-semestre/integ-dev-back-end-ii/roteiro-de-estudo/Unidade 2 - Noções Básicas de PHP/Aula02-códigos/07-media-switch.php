<?php
/* Considerando algoritmo anterior (da média), complemente com uma estrutura condicional que exiba em tela as seguintes informações
“Aprovado com louvor”, se a média for maior ou igual a 90
“Aprovado com boa nota”, se a média for maior ou igual a 70 e menor que 90
“Aprovado na média”, se a média for maior ou igual a 60 e menor que 80
“Em recuperação”, se a média for maior ou igual a 40 e menor que 60
“Reprovado”, se a média for menor que 40
 */

$n1 = 0;
$n2 = 25;
$media = ($n1 + $n2)/2;
echo 'A média é: '. $media. '. Você está: ';
switch($media)
{
    case $media >= 90:
        echo "Aprovado com louvor";
        break;
    case $media >= 70 and $media < 90:
        echo "Aprovado com boa nota";
        break;
    case $media >= 60 and $media < 70:
        echo "Aprovado na média";
        break;
    case $media >= 40 and $media < 60:
        echo "Em recuperação";
        break;
    default:
        echo "Reprovado";
    
}   
?>