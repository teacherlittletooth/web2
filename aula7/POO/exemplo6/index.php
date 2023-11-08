<?php

//Importar arquivo
include "./model/music.php";

//Criando novo objeto, ou
//instanciando classe
$music1 = new Music();

//Fazendo uso dos setters
$music1->setName("Esse cara sou eu");
$music1->setSinger("Roberto Carlos");
$music1->setAlbum("Esse cara...");
$music1->setTime(224);

//Verificando dados do objeto
var_dump($music1);

//Fazendo uso dos getters
echo "<hr>";
echo "Agora com vocês, o super artista ".
    $music1->getSinger().
    " cantando seu clássico ".
    $music1->getName().
    "!";

echo "<hr>";

//Fazendo uso do construtor
$music2 = new Music(
    "Na moral",
    "Jota Quest",
    "Planeta dos Macacos",
    263
);

//Analisando novo objeto
var_dump($music2);

//Fazendo uso do toString
echo $music1->toString();
echo $music2->toString();