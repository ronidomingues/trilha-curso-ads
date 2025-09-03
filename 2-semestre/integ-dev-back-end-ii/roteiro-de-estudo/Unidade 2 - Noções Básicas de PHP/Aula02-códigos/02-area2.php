<?php
/* Criar um algoritmo em PHP que calcule a área da circunferência, dado um valor qualquer de raio. */
$raio = $_POST['raio_circunferencia'];
define('PI',3.14159265358979323846);
$area = PI * ($raio**2) ;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do triângulo</title>
</head>
<body>
    <h1>Meu primeiro formulário: Resultado</h1>
    <p>A área do triângulo é <?php echo $area; ?>!</p>
</body>
</html>