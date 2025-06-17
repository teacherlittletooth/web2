<h2> Aula 3 - Array e Laços de Repetição </h2>

<?php

echo "<ul><li> Array - Vetor </li></ul>";

//Criando lista (array)
$carros = [
    "Fusca",
    "Chevette",
    "Opala",
    "DelRey",
    "Maverick",
    "Brasília"
];

//Verificando número de elementos de uma lista (array)
echo "Número de elementos: " . count($carros);

echo "<hr>";

//Despejando conteúdo de uma variável/objeto/array
var_dump( $carros );

echo "<hr>";

echo "<ul><li> Laços de repetição </li></ul>";

//Ordenando lista (para ordenar de forma reversa, use rsort)
sort( $carros );

//Iterando com foreach
echo "<ol>";
foreach( $carros as $car ) {
    echo "<li> $car </li>";
}
echo "</ol>";

echo "<hr>";

//Iterando com for
for($i = 0; $i < count($carros); $i++) {
    echo ($i + 1) . " - " . $carros[$i] . "<br>";
}

echo "<hr>";

//Iterando com while
$x = count($carros) - 1;
while( $x >= 0 ) {
    echo ($x + 1) . " - " . $carros[$x] . "<br>";
    $x--;
}

echo "<hr>";

//Exemplo de aplicação com for
$num = 7;
for($a = 1; $a <= 10; $a++) {
    echo $num ." x ". $a ." = ".($num * $a) . "<br>";
}
