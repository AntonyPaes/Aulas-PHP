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