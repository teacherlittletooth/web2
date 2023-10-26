<?php

//Importando arquivo
require_once "./data.php";

//Mostrando a lista completa
var_dump($products);

echo "<hr>";

//Pegando somente as chaves (índices)
foreach($products as $key => $value) {
    var_dump($key);
}

echo "<hr>";

//Pegando somente os valores
foreach($products as $k => $v) {
    var_dump($v["produto"]);
    echo "<br>";
    var_dump($v["valor"]);
    echo "<br>";
    var_dump($v["estoque"]);
    echo "<br>";
}

echo "<hr>";

//Adicionando elemento ao array
$products[4] = [
    "produto" => "Memória Ram 16 GB",
    "valor" => 119.50,
    "estoque" => 6
];

var_dump($products);

echo "<hr>";

//Editando um dado
$products[1]["estoque"] = 25;
$products[3]["valor"] = 189.90;

var_dump($products);

echo "<hr>";

//Excluir um elemento
array_splice($products, 2, 1);

var_dump($products);
