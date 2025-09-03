<?php
/*Desenvolva um calculadora para converter o seu dinheiro, em reais, para dólar (se o usuário digitar 1), euro (se o usuário digitar 2), libra (se o usuário digitar 3) e imprimir a mensagem “Opção inválida”, se o usuário digitar qualquer outro valor! 
Cotação: Dólar (R$ 4.97); Euro (R$ 5.41); Libra (R$ 6.33)*/

$entrada = readline("\n\nDigite o valor a ser convertido ");
$valor = intval($entrada);
$texto_menu = "Informe a opção desejada: 1.Converter para dólar; 2.Converter para euro; 3.Converter para libra";
$opcao = readline($texto_menu);
switch ($opcao)
{
    case 1: 
        $conversor = $valor / 4.97;
        echo "\n\nR$ $valor equivale a $conversor dólares";
        break;
    case 2:
        $conversor = $valor / 5.71;
        echo "\n\nR$ $valor equivale a $conversor euros";
        break;
    case 3:
        $conversor = $valor / 6.33;
        echo "\n\nR$ $valor equivale a $conversor libras esterlinas";
        break;
    default:
        echo "\n\nOpção inválida";
}




?>