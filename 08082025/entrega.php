<?php
/* 
ATV 3:
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

ATV 7:
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

ATV 8:
<?php
$num = -550;

function validation($num)
{
    if ($num == 0) {
        $result = "0";
    } else if ($num > 0) {
        $result = "1";
    } else {
        $result = "-1";
    }

    return $result;
}

$validationConfirmed = validation($num);
switch ($validationConfirmed) {
    case "1":
        echo "O número $num é positivo, então é atribuido a ele o valor $validationConfirmed";
        break;
    case "0":
        echo "O número é $num, então é atribuido a ele o valor $validationConfirmed";
        break;
    case "-1":
        echo "O número $num é negativo, então é atribuido a ele o valor $validationConfirmed";
        break;
}

?>

ATV 13:
<?php
$num = 6;

function numberPerfect($num)
{
    if ($num <= 0) {
        return false;
    }

    $somadosDivisores = 0;

    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $somadosDivisores += $i;
        }
    }
    return $somadosDivisores == $num;
}

if (numberPerfect($num)) {
    echo "$num é um número perfeito";
} else {
    echo "$num não é um número perfeito";
}
?>

ATV 14:
<?php
$alt = 1.75;
$sex = "Masculino";

function idealWeight($alt, $sex)
{
    if ($sex == "Masculino") {
        $result = (72.7 * $alt) - 58;
    } else if ($sex == "Feminino") {
        $result = (62.1 * $alt) - 44.7;
    } else {
        return 0;
    }
    return $result;

}

$ideal = idealWeight($alt, $sex);

echo "Para uma pessoa com $alt m de Altura e sexo $sex, o peso ideal é de " . number_format($ideal, 2) . "KG";

?>

ATV 15:
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

?> */

?>