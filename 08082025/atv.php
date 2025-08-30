<?php
    function findDivisor($number)
{
    $divisors = [];

    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            array_push($divisors, $i);
        }
    }
    return $divisors;
}

$testnumber = [12, 65, 85, 45, 15];

foreach($testnumber as $num) {
    $divisors = findDivisor($num);
    echo "Os divisores de $num são: ".implode(",   ", $divisors);
    echo"<br>";
}
?>