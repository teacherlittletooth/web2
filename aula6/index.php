<?php

include "./const.php";

if(isset($_GET["player"])) {
    //Inicia sessão
    session_start();
    //Cria variáveis de sessão
    $_SESSION["player"] = $_GET["player"];
    $_SESSION["points"] = 0;
    $_SESSION["q"] = 0;
    //Direcionamento automático
    header("Location: game.php");
}

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
    <title><?= TITLE ?></title>

    <!-- CSS Interno -->
    <style>
        h1 {
            font-family: "verdana";
            letter-spacing: 5px;
            /* background-color: blue; */
            text-align: center;
        }

        html {
            height: 100%;
            background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(55,126,187,1) 100%);
        }

        body {
            /* background-color: yellow; */
            text-align: center;
        }
    </style>

</head>
<body>
    <h1>Qual o seu nome?</h1>
    <form action="#" method="get">
        <input type="search" name="player">
        
        <!-- Uso de CSS Inline -->
        <input type="submit" value="Iniciar!" style="background-color: black; color: rgb(0,150,200);">
    </form>
</body>
</html>