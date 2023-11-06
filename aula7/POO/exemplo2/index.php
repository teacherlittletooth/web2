<?php

//Importando arquivo
include_once "./model/car.php";

//Instanciando (criando objeto)
//da classe "Car" (vazio)
$car1 = new Car();

//Criando objeto com dados
$car2 = new Car(
    "123456",
    "Mitsubishi",
    "Pajero",
    3.2,
    2012
);

//Chamando o método toString
echo $car1->toString();
echo $car2->toString();

echo "<br>";

//Criando novo objeto com alguns atributos
$car3 = new Car(
    null,       //chassis
    "Toyota",   //brand
    null,       //model
    2.0,        //engine
    null        //year
);

//Salvando valor por meio do "set"
$car3->setModel("Corolla");
$car3->setYear(2018);

echo $car3->toString();

//Fazendo uso do "get"
echo "<>Vendo ".$car3->getBrand().
    " ".$car3->getModel().
    ", motor ".number_format($car3->getEngine(), 1).
    ", único dono!";