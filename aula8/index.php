<?php
//Importando arquivos
require "./const.php";
require "./src/model/user.php";

if( isset($_POST["user"]) &&
    isset($_POST["pass"])) {
        //Cria um novo objeto da classe user
        $newUser = new User(
            $_POST["user"],
            $_POST["pass"]
        );
        if( $newUser->login() ) {
            echo "<script> alert('Usuário autenticado!') </script>";
        } else {
            echo "<script> alert('Acesso negado!') </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= DESCRIPTION ?>">
    <meta name="keywords" content="<?= KEYWORDS ?>">
    <meta name="author" content="<?= AUTHOR ?>">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?= TITLE ?></title>
</head>
<body>
    <div id="login">
        <img src="./assets/img/logotipo.png" alt="Imagem" width="150">
        <h1>Login</h1>
        <form action="#" method="post">
            <input type="text" name="user" id="user" class="login" placeholder="Usuário">
            <br><br>
            <input type="password" name="pass" id="pass" class="login" placeholder="Senha">
            <div id="show-pass" title="Quer ver a senha?">🐵</div>
            <br><br><hr><br>
            <input type="submit" value="Entrar 🚪">
        </form>
    </div>
    <script src="./assets/js/script.js"></script>
</body>
</html>