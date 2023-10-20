<?php

// Fórmula de Bhaskara
echo "📘 CÁLCULO DA FÓRMULA DE BHASKARA <br>";

$a = 2;
$b = 8;
$c = 3;

$delta = (($b * $b) - (4 * $a * $c));

//var_dump($delta);

$x1 = ((-$b + sqrt($delta)) / (2 * $a));
$x2 = ((-$b - sqrt($delta)) / (2 * $a));

print("a = " . $a . " / b = " . $b . " / c = " . $c . "<br>");
print("Δ = " . $delta . "<br>");
print("X' = " . number_format($x1, 3) . "<br>");
print("X'' = " . number_format($x2, 3) . "<br>");

echo "<hr>";

// Verificando se é par ou ímpar

$num = [2, 3, 5, 7, 15, 23, 31, 42, 17, 53, 67];

//var_dump($num);

echo "📕 PAR OU ÍMPAR <br>";

for($x = 0; $x < count($num); $x++) {
   if($num[$x] % 2 == 0) {
        echo "🟢 " . $num[$x] . " é par <br>";
   } else {
        echo "🟡 " . $num[$x] . " é ímpar <br>";
   }
}

echo "<hr>";

// Verificando se o número é primo

echo "📒 NÚMEROS PRIMOS <br>";

for($x = 0; $x < count($num); $x++) {
    if($num[$x] % 2 == 0 or $num[$x] % 3 == 0) {
        if($num[$x] == 2 or $num[$x] == 3) {
            echo "🔹 ". $num[$x] . " é primo <br>";
        } else {
            echo "🔸 ". $num[$x] . " não é primo <br>";
        }
    } else {
         echo "🔹 ". $num[$x] . " é primo <br>";
    }
}

echo "<hr>";

// Tabuada de 2 até 9

echo "📗 TABUADA <br>";

for($i = 2; $i <= 9; $i++) {
    echo "----- Tabuada do " . $i . " -----<br>";
    for($j = 1; $j <= 10; $j++) {
        echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
    }
    echo "----------------------------<br>";
}
