<?php
/* Incorpore uma condição intermediária que exiba a mensagem: “Em recuperação”, caso a média seja maior ou igual a 40 e menor que 60. */

$n1 = 50;
$n2 = 60;
$media = ($n1 + $n2)/2;
echo 'A média é: '. $media. '. Você está: ';
if ($media >= 60)
    echo 'Aprovado!';
elseif ($media >= 40 and $media < 60)
    echo 'Em recuperação';
else
    echo 'Reprovado!';

?>