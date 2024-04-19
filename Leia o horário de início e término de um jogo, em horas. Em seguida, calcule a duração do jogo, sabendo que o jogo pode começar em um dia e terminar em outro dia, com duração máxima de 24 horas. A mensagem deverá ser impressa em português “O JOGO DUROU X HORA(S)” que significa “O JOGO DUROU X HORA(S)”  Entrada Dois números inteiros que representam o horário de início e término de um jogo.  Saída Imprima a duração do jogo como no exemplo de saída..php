<?php


function formatarHoras($horas) {
  $horas = str_pad($horas, 2, '0', STR_PAD_LEFT); 
  $minutos = 0; 

  return $horas . ":" . $minutos;
}


$inicio = (int) fgets(STDIN);
$termino = (int) fgets(STDIN);


if ($termino < $inicio) {
  $termino += 24; 
}


$duracao = $termino - $inicio;


if ($duracao > 24) {
  $duracao = 24;
}


$duracaoFormatada = formatarHoras($duracao);


echo "O JOGO DUROU {$duracaoFormatada} HORA(S)\n";

?>
