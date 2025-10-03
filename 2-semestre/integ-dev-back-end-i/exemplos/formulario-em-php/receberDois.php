<?php

  $nome = filter_input(INPUT_POST, 'nome');
  $idade = filter_input(INPUT_POST, 'idade', SANITAZE_NUMBER_INT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  // filter_input quando não acha a informação ele atribui false a variavel

  if($nome && $idade){
        echo "Nome:".$nome."<br/>";
        echo "Idade:".$idade."<br/>";
        echo "Email:".$email."<br/>";;
    }
  else{
        //header - faz o redirecionamento da requisição para a página indicada        
        header("Location: formularioQuatro.php");
        exit;
    }
?>

