<?php
    include "./const.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Joguinho de perguntas e respostas">
    <meta name="keywords" content="php, qi, informática">
    <meta name="author" content="Donini, Paulo André Rocha">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title><?= TITLE ?></title>
</head>
<body>
    <h1>Obrigado por jogar, <?= $_SESSION["player"] ?>!</h1>
    <h3>Pontuação final: <?= $_SESSION["points"] ?></h3>
    <a href="index.php">Jogar novamente</a>
    <a href="http://qi.edu.br">Sair</a>    
</body>
</html>