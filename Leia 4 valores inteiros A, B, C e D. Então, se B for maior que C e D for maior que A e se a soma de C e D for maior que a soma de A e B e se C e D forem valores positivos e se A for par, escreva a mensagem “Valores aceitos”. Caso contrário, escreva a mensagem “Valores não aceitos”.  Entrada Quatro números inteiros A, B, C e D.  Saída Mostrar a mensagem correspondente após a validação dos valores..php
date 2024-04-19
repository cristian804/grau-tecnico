<?php


$a = (int) fgets(STDIN);
$b = (int) fgets(STDIN);
$c = (int) fgets(STDIN);
$d = (int) fgets(STDIN);


$condicao1 = $b > $c && $d > $a;


$condicao2 = $c + $d > $a + $b;


$condicao3 = $c > 0 && $d > 0;


$condicao4 = $a % 2 == 0;


$todasCondições = $condicao1 && $condicao2 && $condicao3 && $condicao4;


if ($todasCondições) {
  echo "Valores aceitos\n";
} else {
  echo "Valores não aceitos\n";
}

?>
