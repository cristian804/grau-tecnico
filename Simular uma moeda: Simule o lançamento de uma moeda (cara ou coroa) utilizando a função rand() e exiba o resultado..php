<?php

function lancarMoeda() {
  
  $resultado = rand(0, 1);

  
  if ($resultado === 0) {
    $lado = "Cara";
  } else {
    $lado = "Coroa";
  }

  
  return $lado;
}


$ladoSorteado = lancarMoeda();
echo "O resultado foi: $ladoSorteado";

?>
