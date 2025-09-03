<?php
/* Considerando algoritmo anterior (da média), complemente com uma estrutura condicional que exiba em tela as seguintes informações “Aprovado com louvor”, se a média for igual a A
“Aprovado com boa nota”, se a média for igual B
“Aprovado na média”, se a média for igual a C
“Em recuperação”, se a média for igual a a D
“Reprovado”, se a média for igual a E
 */

 $n1 = 100;
$n2 = 55;


if ((($n1 + $n2)/2) >= 90) 
    $media = 'A';
elseif ((($n1 + $n2)/2) >= 70 && (($n1 + $n2)/2) < 90)
    $media = 'B';
elseif ((($n1 + $n2)/2) >= 60 && (($n1 + $n2)/2) < 80)
    $media = 'C';
elseif ((($n1 + $n2)/2) >= 40 && (($n1 + $n2)/2) < 60) 
    $media = 'D';
else
    $media = 'E';

echo 'A média é: '. $media. '. Você está: ';

switch($media)
{
    case 'A':
        echo "Aprovado com louvor";
        break;
    case 'B':
        echo "Aprovado com boa nota";
        break;
    case 'C':
        echo "Aprovado na média";
        break;
    case 'D':
        echo "Em recuperação";
        break;
    default:
        echo "Reprovado";
    
}   

 ?>