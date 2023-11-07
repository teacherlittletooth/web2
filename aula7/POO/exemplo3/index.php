<?php

//Importar arquivo
require "./model/plants.php";

//Criando objeto (nova instância da classe)
$plant1 = new Plants(
    "Bananeira",
    "Tropical",
    true,
    "Amarela"
);

//Criando objeto
$plant2 = new Plants(
    "Samambaia",
    null,
    null,
    "Verde"
);

//Fazendo uso do "set"
$plant2->setWeather("Úmido");

//Criando objeto vazio
$plant3 = new Plants();

//Preenchendo os atributos com "set"
$plant3->setSpecies("Cacto");
$plant3->setWeather("Árido");
$plant3->setIsEdible(true);
$plant3->setColor("Verde");

//Fazendo uso do método toString
echo $plant1->toString();
echo $plant2->toString();
echo $plant3->toString();

//Fazendo uso do "get"
echo "<br>";

echo "A planta ".$plant3->getSpecies().
     " é originária de locais com clima ".
     $plant3->getWeather().",".
     (($plant3->getIsEdible()) ? " é " : " não é ").
     "comestível, e sua cor predominante é ".
     $plant3->getColor().".";