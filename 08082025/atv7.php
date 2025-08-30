<?php
$num = 616;
function parOuImpar($num)
{
    $resultado = $num % 2;
    return $resultado;
}
$valorResultado = parOuImpar($num);

if ($valorResultado == 0) {
    echo "O número $num é par, então recebe o valor (1)";
} else {
    echo "O número $num é ímpar, então recebe o número (0)";
}
?>