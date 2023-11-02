<?php

include "./const.php";
include "./qaa.php";

session_start();

//Algoritmo para verificação da resposta
if(isset( $_POST["question".$_SESSION["q"]] )) {
    $myAnswer = $_POST["question".$_SESSION["q"]];
    if( array_search($myAnswer, $answerList[$_SESSION["q"]]) == "correct") {
        echo "<script> alert('Resposta correta!') </script>";
        $_SESSION["points"] += 10;
    } else {
        echo "<script> alert('Resposta errada!') </script>";
    }
    //Incrementando o índice das perguntas
    $_SESSION["q"] ++;

    //Verificando o fim das perguntas
    if($_SESSION["q"] > array_key_last($questionList)) {
        header("Refresh: 0; URL = finish.php");
    }
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
    <link rel="stylesheet" href="style.css">
    <title><?= TITLE ?></title>
</head>
<body>
    <h2>
        Jogador: <span><?= $_SESSION["player"] ?></span>
        <br>
        Pontuação: <span><?= $_SESSION["points"] ?></span>
    </h2>
    <div id="question-box">
        <h3>Pergunta #<?= $_SESSION["q"] + 1 ?></h3>
        <h4><?= $questionList[$_SESSION["q"]] ?></h4>
        <form action="#" method="post">
            <?php
                shuffle($answerList[$_SESSION["q"]]);
                foreach($answerList[$_SESSION["q"]] as $a) : ?>
                <input type="radio"
                    name="question<?= $_SESSION["q"] ?>"
                    id="<?= $a ?>"
                    value="<?= $a ?>"
                    required>
                    
                <label for="<?= $a ?>"><?= $a ?></label>
                <br><br>
            <?php endforeach ?>

            <input type="submit" value="Responder">
            <input type="reset" value="Limpar resposta">
        </form>
    </div>
</body>
</html>