<?php


fscanf(STDIN, "%f", $value);


$notes = [100, 50, 20, 10, 5, 2];
$coins = [1, 0.5, 0.25, 0.10, 0.05, 0.01];


foreach ($notes as $note) {
    $number_of_notes = floor($value / $note);
    $value -= $number_of_notes * $note;
    echo "NOTAS: $number_of_notes nota(s) de R$ " . number_format($note, 2, ",", ".") . "\n";
}

foreach ($coins as $coin) {
    $number_of_coins = floor($value / $coin);
    $value -= $number_of_coins * $coin;
    echo "MOEDAS: $number_of_coins moeda(s) de R$ " . number_format($coin, 2, ",", ".") . "\n";
}
