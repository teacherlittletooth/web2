<?php

//Importar o arquivo
require "./model/sport.php";

//Criando objeto da classe "Sport"
//(Instância da classe "Sport")
$esp1 = new Sport();

//Fazendo uso dos "setters"
$esp1->setName("Tênis simples");
$esp1->setIsSingle(true);
$esp1->setNumberOfPlayers(2);
$esp1->setOrigin("França");

//Analisando o que há no objeto "$esp1"
var_dump($esp1);

echo "<hr>";

// Criando objeto, enviando parâmetros
// para o método construtor
$esp2 = new Sport(
    "Futebol de campo",
    false,
    22,
    "Inglaterra"
);

//Verificando o objeto "$esp2"
var_dump($esp2);

echo "<br>";

//Fazendo uso do método toString
echo $esp1->toString();
echo $esp2->toString();

echo "<br>";

//Fazendo uso dos "getters"
echo "O ".$esp1->getName().
     " é um esporte ".
     (($esp1->getIsSingle()) ? "individual" : "de equipe").
     " que precisa de ".
     $esp1->getNumberOfPlayers().
     " jogadores. Criado na ".
     $esp1->getOrigin().".";