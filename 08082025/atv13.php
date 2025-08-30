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