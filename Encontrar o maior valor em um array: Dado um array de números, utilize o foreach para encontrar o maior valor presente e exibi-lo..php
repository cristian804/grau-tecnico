<?php


$numeros = array(10, 20, 30, 40, 50);


$maiorValor = $numeros[0];


foreach ($numeros as $numero) {
  if ($numero > $maiorValor) {
    $maiorValor = $numero; 
  }
}


echo "O maior valor do array é: " . $maiorValor;

?>
