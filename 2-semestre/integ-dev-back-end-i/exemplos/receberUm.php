<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $larg = $_POST["largura"];
    $compr = $_POST["comprimento"];

    // casting
    $largura = (float)$larg;
    $comprimento = (float)$compr;

    echo "Largura: " . $largura."m"."<br>";
    echo "Comprimento: " . $comprimento."m"."<br>";
    $area= $largura*$comprimento;
    echo "Area: " . $area." m<sup>2</sup>";
  }
?>