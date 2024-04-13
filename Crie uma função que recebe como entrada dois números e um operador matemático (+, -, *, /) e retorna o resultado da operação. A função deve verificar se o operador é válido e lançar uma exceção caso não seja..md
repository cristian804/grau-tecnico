<?php

function calcularOperacao($num1, $num2, $operador) {
    switch ($operador) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                throw new Exception("Divisão por zero não é permitida.");
            }
            return $num1 / $num2;
        default:
            throw new Exception("Operador inválido.");
    }
}


try {
    $resultado = calcularOperacao(10, 5, '+');
    echo "O resultado é: " . $resultado;
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>
