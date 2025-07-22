<?php
//Caso seja detectado uma requisição POST
if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    //Importar arquivo Database.php
    require_once "src/database/Database.php";

    //Captura dos dados
    $nome     = $_POST["nome"];
    $cpf      = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $nasc     = $_POST["nasc"];

    //Criar objeto da classe Database
    $db = new Database();

    //Varificar se há duplicidade de registro (cpf)
    $sql = "SELECT * FROM clientes WHERE cpf = '$cpf'";
    $pesquisa = $db->select($sql);

    //Se a contagem de elementos do array $pesquisa for 0,
    //quer dizer que o cpf pesquisado não foi encontrado
    //na base de dados
    if( count($pesquisa) == 0 ) {
        $sql = "INSERT INTO clientes(nome, cpf, telefone, data_nasc)
                VALUES('$nome', '$cpf', '$telefone', '$nasc')";

        $db->insert($sql);

        echo "<script>
                alert('✅ Cadastro efetuado!')
                window.location.href='index.php'
              </script>";
    } else {
        echo "❌ CPF já cadastrado!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvados</title>
</head>
<body>
    <h1>Cadastro de clientes:</h1>

    <form action="#" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone" required><br><br>

        <label for="nasc">Data de nascimento:</label><br>
        <input type="date" name="nasc" id="nasc" max="2015-07-30" required><br><br>

        <input type="submit" value="Finalizar cadastro">
    </form>

    <hr>
    <a href="lista-clientes.php">Lista de clientes</a>
</body>
</html>