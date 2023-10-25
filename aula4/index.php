<?php

require_once "./data.php";

if(isset($_GET["search"])) {
    $search = $_GET["search"];
} else {
    $search = null;
}

//var_dump($search);

//Função para pesquisa no array
function findGame($find) {
    global $games;
    //Passando texto para maiúsculas
    $findUpperCase = strtoupper($find);
    $items = 0;
    foreach($games as $k => $v) {
        if(strpos(strtoupper($v["jogo"]), $findUpperCase) !== false) {
            echo "<hr>JOGO: "   . $v["jogo"];
            echo "<br>ANO: "    . $v["ano"];
            echo "<br>GÊNERO: " . $v["genero"];
            $items++;
        }
    }
    echo "<hr>".$items." jogo(s) encontrado(s).";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa games</title>
</head>
<body>
    <form action="#" method="get">
        <input type="text" name="search" placeholder="Pesquisa...">
        <input type="submit" value="Pesquisar">
    </form>
    <hr>
    <?php
        //"if/else" de uma linha = operador ternário"
        ($search != null) ? findGame($search) : "";
    ?>  
</body>
</html>
