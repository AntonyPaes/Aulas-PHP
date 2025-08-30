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