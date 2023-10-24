<?php

//Funções sem retorno e sem parâmetro
function sayHello() {
    print("Hello!<br>");
}

sayHello();

//Funções sem retorno, com parâmetros
function greetings($name, $hobbie = "nada") {
    print("Bem vindo ".$name."!<br>");
    print("Você gosta de ".$hobbie."!<br>");
}

greetings("André", "futebol");
greetings("Paulo");

//Funções com retorno e parâmetros
function bhaskara($a, $b, $c) {
    $delta = (($b * $b) - (4 * $a * $c));
    $x1 = ((-$b + sqrt($delta)) / (2 * $a));
    $x2 = ((-$b - sqrt($delta)) / (2 * $a));
    return "X' = ".number_format($x1, 3).
            "<br>X'' = ".number_format($x2, 3).
            "<br>";
}

echo bhaskara(2, 6, 3);
echo bhaskara(4, 7, 2);

//Criando um vetor vazio
$cars = []; // $cars = array();

//Adicionando elementos ao vetor
$cars[] = "CHEVETTE";
$cars[] = "CORSEL";
$cars[] = "BRASILIA";
$cars[] = "VARIANT";

//Depurando uma variável
var_dump($cars);

//Função para listar os dados
function showCars() {
    echo "<br>//// Lista de carros ////";
    //Trazendo uma variável global para a função
    global $cars;
    foreach($cars as $c) {
        echo "<br> * ".$c;
    }
    echo "<br>//////////////////////////////<br>";
}

showCars();

//Função para adicionar um novo elemento
function addCar($newCar) {
    global $cars;
    $cars[] = strtoupper($newCar);
    echo $newCar." cadastrado com sucesso!<br>";
    showCars();
}

addCar("Fusca");

//Função para remover um elemento
function delCarById($id) {
    global $cars;
    //Verificando se o $id existe
    if($id >= count($cars) || $id < 0) {
        echo "<br>Nenhum carro foi excluído.<br>";
    } else {
        //Capturando nome do carro que será excluído
        $carDeleted = $cars[$id];
        //Excluindo 1 elemento do $id especificado
        array_splice($cars, $id, 1);
        //Apresentando mensagem de sucesso
        echo "<br>".$carDeleted." excluído!<br>";
        showCars();
    }
}

delCarById(7);
delCarById(3);

//Função para editar um carro
function editCarById($id, $newCar) {
    global $cars;
    //Verificando se o $id existe
    if($id >= count($cars) || $id < 0) {
        echo "<br>Nenhum carro foi editado.<br>";
    } else {
        //Capturando nome do carro que será editado
        $carEdited = $cars[$id];
        //Editando 1 elemento do $id especificado
        array_splice($cars, $id, 1, strtoupper($newCar));
        //Apresentando mensagem de sucesso
        echo "<br>".$carEdited." editado para ".$newCar."<br>";
        showCars();
    }
}

editCarById(8, "Gurgel");
editCarById(3, "Opala");
