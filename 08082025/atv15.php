<?php

$num = 5;
function factorial($num)
{
    if ($num <= 0) {
        return false;
    } else if ($num == 0) {
        return 1;
    }

    $result = 1;

    for ($i = $num; $i >= 1; $i--) {
        $result *= $i;
    }

    return $result;
}

$correctFactorial = factorial($num);

if ($correctFactorial !== false) {
    echo "O fatorial de $num é $correctFactorial";
} else {
    echo "Entrada inválida insira um número inteiro e positivo!";
}

?>