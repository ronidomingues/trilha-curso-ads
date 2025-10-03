<?php

  $nome = filter_input(INPUT_POST, 'nome');
  $idade = filter_input(INPUT_POST, 'idade');
  // filter_input quando não acha a informação ele atribui false a variavel

  if($nome && $idade){
        echo "Nome:".$nome."<br/>";
        echo "Idade:".$idade;
    }
  else{
        echo "Não enviou os dados";
    }
?>

