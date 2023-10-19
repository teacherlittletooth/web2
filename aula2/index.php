<?php

// É par ou ímpar?

$num = [5, 1, 6, 9, 2, 54, 16, 3, 13, 33];

for($i = 0; $i < count($num); $i++) {
    if($num[$i] % 2 == 0) {
        print($num[$i] . " é par <br>");
    } else {
        print($num[$i] . " é ímpar <br>");
    }
}

echo "<hr>";

// Números primos

for($i = 0; $i < count($num); $i++) {
    if($num[$i] % 2 == 0 or $num[$i] % 3 == 0) {
        if($num[$i] == 2 or $num[$i] == 3) {
            print($num[$i] . " é primo <br>"); 
        } else {
            print($num[$i] . " não é primo <br>");
        }
    } else {
        print($num[$i] . " é primo <br>");
    }
}

echo "<hr>";

// Fórmula de Bhaskara

$a = 2;
$b = 8;
$c = 3;

$delta = (($b * $b) - (4 * $a * $c));
//var_dump($delta);

$x1 = ((-$b + sqrt($delta)) / (2 * $a));
$x2 = ((-$b - sqrt($delta)) / (2 * $a));

print("X' = " . number_format($x1, 3) . "<br>");
print("X'' = " . number_format($x2, 3) . "<br>");
