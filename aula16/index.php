<?php
$a = explode("\\", __DIR__);
$dir = "/{$a[1]}/{$a[2]}/{$a[3]}";

//Importação do cabeçalho
include $dir."/src/controller/header.php";

//Importação dos arquivos que contém as classes User e Database
include MODEL . "/user.php";
include MODEL . "/database.php";

//Importando arquivo que verifica se a sessão está "ligada".
//Caso esteja, redireciona o usuário para a página de perfil
include CONTROLLER . "/session_on.php";

// recebendo dados para o login
if( isset($_POST["user"]) &&
    isset($_POST["pass"]) ) {
        //Criar um novo objeto da classe User
        $user = new User(
            $_POST["user"],
            $_POST["pass"]
        );
        //Fazendo uso do método de verificação de login
        if( $user->login() ) {
            if($user->getProfile()==1){
                echo "<script> alert('ADM NA ÁREA! ✅') </script>"; 
                $_SESSION["adm"] = $user->getObject();
                header("Refresh: 0; URL = ".VIEW."/adm.php");
            } else {
                if( $user->getStatus() != 1 ) {
                    //é apresentado um alert javascript
                    echo "<script> alert('AUTENTICADO! ✅') </script>";
                    //é criada uma sessão com os dados do objeto retornado
                    $_SESSION["user"] = $user->getObject();
                    //e então somos redirecionados para a pagina de perfil
                    //var_dump($_SESSION["user"]);
                    header("Refresh: 0; URL = ".VIEW."/profile.php");      
                } else {
                    echo "<script> alert('BANIDO! ❌') </script>";
                }
            }
        } else {
            echo "<script> alert('ACESSO NEGADO! ❌') </script>";
        }
    }

    
?>


    <div id="login">
        <img src="./assets/img/logotipo.png" alt="Imagem" width="150">
        <h1>Login</h1>
        <form action="#" method="post">
            <div id="login-fields">
                <input type="text" name="user" id="user" class="login" placeholder="Usuário">
                <br><br>
                <input type="password" name="pass" id="pass" class="login" placeholder="Senha">
                <br><br>
                <a href="#">Esqueci a senha</a>
            </div>
            <br><hr><br>
            <input type="submit" value="Entrar 🚪">
            <br>
        </form>
        <a href="<?= VIEW ?>/register.php">Cadastrar-se</a>
    </div>

<?php
//Importação do rodapé
include $dir."/src/controller/footer.php";