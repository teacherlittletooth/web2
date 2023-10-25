<?php

//Função sem parâmetros e sem retorno
function sayGoodbye() {
    echo "Tchau!<br>";
}

sayGoodbye();

//Função com parâmetros e sem retorno
function greetings($name, $hobbie = "nada") {
    echo "Bem vindo ".$name."! ";
    echo "Você gosta de ".$hobbie."!<br>";
}

greetings("Jurema");
greetings("Astolfo", "pescar");

//Função com parâmetros e retorno
function bhaskara($a, $b, $c) {
    $delta = (($b * $b)-(4 * $a * $c));
    $x1 = (-$b + sqrt($delta)/(2 * $a));
    $x2 = (-$b - sqrt($delta)/(2 * $a));
    return "<hr>X' = ".number_format($x1, 3).
           "<br>X'' = ".number_format($x2, 3).
           "<hr>";
}

echo bhaskara(2, 5.8, 3);
echo bhaskara(2.4, 7.9, 4.2);

//Criando um array vazio
$movies = []; // $movies = array();

//Inserir elementos no array
$movies[] = "E o vento levou";
$movies[] = "Vingadores";
$movies[] = "Harry Potter";
$movies[] = "O senhor do anéis";

//Analisa variável tecnicamente
var_dump($movies);

//Mostrando todos os itens da lista
function showAllMovies() {
    echo "<br>//// Lista de filmes ////";
    global $movies;
    foreach($movies as $m) {
        echo "<br> - ".$m;
    }
    echo "<br>///////////////////////<br>";
}

showAllMovies();

//Função para registrar um novo filme
function addMovie($newMovie) {
    global $movies;
    $movies[] = $newMovie;
    echo $newMovie . " cadastrado!";
    showAllMovies();
}

addMovie("Rocky V");

//Função para apagar um filme da lista
function delMovieById($id) {
    global $movies;
    //Verificando se o $id existe na lista
    if($id >= count($movies) || $id < 0) {
        echo "<br>Não foi possível excluir.<br>";
    } else {
        //Capturando o nome do filme que será excluído
        $movieDeleted = $movies[$id];
        //Excluindo
        array_splice($movies, $id, 1);
        echo $movieDeleted . " excluído!<br>";
        showAllMovies();
    }
}

delMovieById(6);
delMovieById(2);

//Função para editar um filme da lista
function editMovieById($id, $newMovie) {
    global $movies;
    //Verificando se o $id existe na lista
    if($id >= count($movies) || $id < 0) {
        echo "<br>Não foi possível editar.<br>";
    } else {
        //Capturando o nome do filme que será editado
        $movieEdited = $movies[$id];
        //Editando
        array_splice($movies, $id, 1, $newMovie);
        echo $movieEdited . " editado para " .
             $newMovie . "<br>";
        showAllMovies();
    }
}

editMovieById(0, "O vento trouxe");
editMovieById(10, "Batman");
