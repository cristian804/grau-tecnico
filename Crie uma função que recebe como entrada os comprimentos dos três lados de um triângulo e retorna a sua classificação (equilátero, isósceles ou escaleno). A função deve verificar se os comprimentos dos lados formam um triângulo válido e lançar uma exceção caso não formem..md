<?php
function classificarTriangulo($lado1, $lado2, $lado3) {
  
  if ($lado1 + $lado2 <= $lado3 || $lado1 + $lado3 <= $lado2 || $lado2 + $lado3 <= $lado1) {
    throw new Exception("Os comprimentos não formam um triângulo!");
  }

  
  if ($lado1 == $lado2 && $lado2 == $lado3) {
    return "Equilátero";
  } else if ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
    return "Isósceles";
  } else {
    return "Escaleno";
  }
}


try {
  $classificacao = classificarTriangulo(3, 4, 5);
  echo "Triângulo com lados 3, 4 e 5 é classificado como: " . $classificacao . "\n";

  $classificacao = classificarTriangulo(5, 5, 8);
  echo "Triângulo com lados 5, 5 e 8 é classificado como: " . $classificacao . "\n";

  $classificacao = classificarTriangulo(1, 1, 1);
  echo "Triângulo com lados 1, 1 e 1 é classificado como: " . $classificacao . "\n";
} catch (Exception $e) {
  echo "Erro: " . $e->getMessage() . "\n";
}
