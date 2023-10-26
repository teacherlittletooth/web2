<?php

require_once "./data.php";

if(isset($_GET["search"]) && $_GET["search"] != "") {
    $search = $_GET["search"];
} else {
    $search = null;
}

//var_dump($search);

//Função para pesquisar na lista
function searchProduct($find) {
    global $products;
    $findUpper = strtoupper($find);
    $count = 0;
    foreach($products as $k => $v) {
       if(strpos(strtoupper($v["produto"]), $findUpper) !== false) {
                echo "<hr>PRODUTO: ". $v["produto"];
                echo "<br>PREÇO: R$ ". number_format($v["valor"], 2);
                echo "<br>ESTOQUE: ". $v["estoque"];
                $count++;
       } 
    }
    echo "<hr>".$count." produto(s) encontrado(s).";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa produtos</title>
</head>
<body>
    <form action="#" method="get">
        <input type="search" name="search" placeholder="Pesquisar produto...">
        <input type="submit" value="Pesquisar">
    </form>
    <br>
    <?php
        //testando se a variável $search é null
        echo ($search != null) ? searchProduct($search) : "Digite um termo para pesquisa";
    ?>
</body>
</html>
