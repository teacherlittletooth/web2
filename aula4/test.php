<?php

//Importar os códigos de outro arquivo
require_once "./data.php";

var_dump($games);

echo "<hr>";

//Capturar somente as chaves
foreach($games as $key => $value) {
    var_dump($key);
}

echo "<hr>";

//Capturar somente os valores
foreach($games as $k => $v) {
    var_dump($v);
}

echo "<hr>";

//Capturar somente uma chave específica
foreach($games as $a => $b) {
    var_dump($b["jogo"]);
}

//Alterando dados
$games[101]["jogo"] = "God of War II";

echo "<br>" . $games[101]["jogo"];

//Adicionando novo jogo
$games["106"] = [
    "jogo" => "Stumble guys",
    "ano" => "2018",
    "genero" => "Corrida"
];

echo "<hr>";
var_dump($games);

//Excluir um elemento da lista
array_splice($games, 3, 1);
//OBS: Ao passar pelo array_splice
//as chaves são renomeadas para índices
//que começam do 0 (zero)

echo "<hr>";
var_dump($games);
