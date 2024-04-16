<?php


function lancarDado() {
  
  $face = rand(1, 6);

  
  return $face;
}


$faceRolada = lancarDado();
echo "A face sorteada foi: $faceRolada";

?>
