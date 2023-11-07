<?php

//Importar arquivo
include "./model/country.php";

//Instanciar classe Country, ou
//apenas criar objeto de Country
$country1 = new Country();

//Fazendo uso dos setters
$country1->setName("Jamaica");
$country1->setContinent("América Central");
$country1->setPopulation(2828000);
$country1->setLanguage("Inglês");

//Examinar objeto recém criado
var_dump($country1);

echo "<hr>";

//Fazendo uso dos getters
echo "O país ".$country1->getName().
    ", com população de ".
    $country1->getPopulation().
    " pessoas, fica localizado na ".
    $country1->getContinent().
    ", sendo seu idioma oficial o ".
    $country1->getLanguage().".";


//Fazendo uso do construtor
$country2 = new Country(
    "China",
    "Ásia",
    1500000000,
    "Mandarim"
);

echo "<hr>";

var_dump($country2);

//Fazendo uso do toString
echo $country1->toString();
echo $country2->toString();