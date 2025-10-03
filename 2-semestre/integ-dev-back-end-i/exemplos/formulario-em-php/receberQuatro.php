<?php

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  // filter_input quando não acha a informação ele atribui false a variavel

  if($nome && $email){
        echo "Nome:".$nome."<br/>";
        echo "Idade:".$idade."<br/>";
        echo "Email:".$email."<br/>";;
    }
  else{
        //header - faz o redirecionamento da requisição para a página indicada        
        header("Location: formularioSete.php");
        exit;
    }
?>

