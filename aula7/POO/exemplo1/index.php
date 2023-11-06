<?php

//Importando arquivo da classe
require_once "./model/animal.php" ;

//Criando objeto da classe
$obj1 = new Animal(
    "Peludinho",
    "Felis Catus",
    "Gato",
    3,
    2.680
);

//Fazendo uso de um dos getters
echo $obj1->getName();

echo "<br>";

//Criando mais um objeto da classe
$obj2 = new Animal();

//Fazendo uso de alguns setters e getters
$obj2->setName("Bolinha");
$obj2->setAge(1);

echo $obj2->getName();

//Fazendo uso do método toString para os dois objetos criados
echo $obj1->toString();
echo $obj2->toString();
