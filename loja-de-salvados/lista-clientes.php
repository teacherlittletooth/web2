<?php
require_once "src/database/Database.php";

$db = new Database();
$sql = "SELECT * FROM clientes";

$lista = $db->select($sql);

//var_dump($lista);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvados</title>

    <style>
        #box-edit {
           display: none;
        }
    </style>
</head>
<body>
    <div id="box-edit">
        <h2>Editar cliente:</h2>
        <form action="edita-clientes.php" method="post" onsubmit="return confirm('⚠️Editar dados?')">
            <input type="hidden" name="id" id="id">
            <input type="text" name="nome" id="nome" placeholder="Nome..." required>
            <br><br>
            <input type="text" name="cpf" id="cpf" placeholder="CPF..." required>
            <br><br>
            <input type="text" name="telefone" id="telefone" placeholder="Telefone..." required>
            <br><br>
            <input type="date" name="nasc" id="nasc" required>
            <hr>
            <input type="submit" value="Editar cliente">
            <input type="reset" value="Cancelar" onclick="cancelar()">
        </form>
    </div>

    <h1>Clientes:</h1>

    <table>
        <thead>
            <th>COD</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>TELEFONE</th>
            <th>NASCIMENTO</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach($lista as $cliente) : ?>
                <tr>
                    <td> <?= $cliente->cod ?> </td>
                    <td> <?= $cliente->nome ?> </td>
                    <td> <?= $cliente->cpf ?> </td>
                    <td> <?= $cliente->telefone ?> </td>
                    <td> <?= $cliente->data_nasc ?> </td>
                    <td onclick="editar(
                                    <?= $cliente->cod ?>,
                                    '<?= $cliente->nome ?>',
                                    '<?= $cliente->cpf ?>',
                                    '<?= $cliente->telefone ?>',
                                    '<?= $cliente->data_nasc ?>'
                                )" title="Editar <?= $cliente->nome ?>"> ✏️ </td>
                    <td title="Excluir <?= $cliente->nome ?>"> 🗑️ </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        function editar(id, nome, cpf, telefone, nasc) {
            document.getElementById("box-edit").style.display = "block"
            document.getElementById("id").value = id
            document.getElementById("nome").value = nome
            document.getElementById("cpf").value = cpf
            document.getElementById("telefone").value = telefone
            document.getElementById("nasc").value = nasc
        }

        function cancelar() {
            document.getElementById("box-edit").style.display = "none"
        }

        function excluir() {

        }
    </script>
</body>
</html>