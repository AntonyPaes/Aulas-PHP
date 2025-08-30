<?php

$num1 = 3;
$num2 = 4;
function powerFunctional($base, $exponentional)
{
    $resultado = 1;
    for ($i = 0; $i < $exponentional; $i++) {
        $resultado *= $base;
    }
    return $resultado;
}

$resultado = powerFunctional($num1, $num2);
echo "A base da função é: $num1";
echo "<br>";
echo "O exponencial da função é: $num2";
echo "<br>";
echo "O Resultado da função é $resultado";
?>