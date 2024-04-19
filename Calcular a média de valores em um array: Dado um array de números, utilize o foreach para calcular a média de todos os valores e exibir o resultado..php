<?php


$numeros = array(10, 20, 30, 40, 50);


$soma = 0;
$contagem = 0;


foreach ($numeros as $numero) {
  $soma += $numero; 
  $contagem++; 
}


if ($contagem > 0) { 
  $media = $soma / $contagem;
} else {
  $media = 0; 
}


echo "A média dos elementos do array é: " . $media;

?>
