<?php
//Importação do cabeçalho
include "/xampp/htdocs/aula13_noite/src/controller/header.php";

//Importação dos arquivos que contém as classes User e Database
include MODEL . "/user.php";
include MODEL . "/database.php";

//Importando arquivo que verifica se a sessão está "desligada".
//Caso esteja, redireciona o usuário para a página de login
include CONTROLLER . "/session_off.php";

session_reset();

//Lançando dados da $_SESSION para uma variável
//simples, apenas para facilitar nossa vida
$u = $_SESSION["user"];
var_dump( $u );

//Recebendo os dados do formulário
if( isset($_GET["photo"]) ) {
    $photo = $_GET["photo"];
} else {
    $photo = null;
}

if( isset($_GET["user"]) ) {
    $user = $_GET["user"];
} else {
    $user = null;
}

if( isset($_GET["birth"]) ) {
    $birth = $_GET["birth"];
} else {
    $birth = null;
}

if( isset($_GET["first-name"]) ) {
    $firstName = $_GET["first-name"];
} else {
    $firstName = null;
}

if( isset($_GET["last-name"]) ) {
    $lastName = $_GET["last-name"];
} else {
    $lastName = null;
}

if( isset($_GET["desc"]) ) {
    $desc = $_GET["desc"];
} else {
    $desc = null;
}

if( isset($_GET["cep"]) ) {
    $cep = $_GET["cep"];
} else {
    $cep = null;
}

if( isset($_GET["address"]) ) {
    $address = $_GET["address"];
} else {
    $address = null;
}

if( isset($_GET["number"]) ) {
    $number = $_GET["number"];
} else {
    $number = null;
}

if( isset($_GET["complement"]) ) {
    $complement = $_GET["complement"];
} else {
    $complement = null;
}

if( isset($_GET["neighborhood"]) ) {
    $neighborhood = $_GET["neighborhood"];
} else {
    $neighborhood = null;
}

if( isset($_GET["city"]) ) {
    $city = $_GET["city"];
} else {
    $city = null;
}

if( isset($_GET["state"]) ) {
    $state = $_GET["state"];
} else {
    $state = null;
}

if( isset($_GET["sex"]) ) {
    $sex = $_GET["sex"];
} else {
    $sex = null;
}

if( isset($_GET["phone"]) ) {
    $phone = $_GET["phone"];
} else {
    $phone = null;
}

if( isset($_GET["email"]) ) {
    $email = $_GET["email"];
} else {
    $email = null;
}

if( isset($_GET["notify"]) ) {
    $notify = $_GET["notify"];
} else {
    $notify = null;
}

if( isset($_GET["actual-pass"]) ) {
    $actualPass = $_GET["actual-pass"];
} else {
    $actualPass = null;
}

if( isset($_GET["new-pass"]) ) {
    $newPass = $_GET["new-pass"];
} else {
    $newPass = null;
}

//Função para salvar as atualizações
function updateProfile() {
    //Trazendo as variáveis de fora
    global $photo, $user, $birth, $firstName, $lastName,
    $desc, $cep, $address, $number, $complement, $neighborhood,
    $city, $state, $sex, $phone, $email, $notify,
    $actualPass, $newPass, $u;
    
    //Pegando o cod do usuário
    $cod = $u->getCod();

    //Instanciando a classe Database
    $db = new Database();

    //Fazendo uso do método update da classe
    $db->update(
        "UPDATE users SET
        user_cod            = $cod,
        user_name           ='$user',
        user_pass           ='$actualPass',
        user_photo          ='$photo',
        user_birth          ='$birth',
        user_first_name     ='$firstName',
        user_last_name      ='$lastName',
        user_desc           ='$desc',
        user_cep            ='$cep',
        user_address        ='$address',
        user_number         ='$number',
        user_complement     ='$complement',
        user_neighborhood   ='$neighborhood',
        user_city           ='$city',
        user_state          ='$state',
        user_sex            ='$sex',
        user_phone          ='$phone',
        user_email          ='$email',
        user_notify         = $notify,
        user_new_pass       ='$newPass'
        WHERE user_cod      = $cod"
    );
}
?>

<script>
    function callUpdate() {
       if( confirm("Deseja atualizar os dados?") ) {
           <?= updateProfile() ?>
            alert("Dados atualizados!")
       }
    }
</script>

    <button type="button" onclick="window.location.href='<?= ROOT ?>/src/controller/logout.php'">Finalizar sessão 🚪</button>

    <form action="#" method="get" onsubmit="return callUpdate()">
        <!-- Tabela para organizar o conteúdo -->
        <table>
            <!-- <tr> representa uma linha da tabela -->
            <tr> 
                <!-- <td> representa uma célula da linha (coluna) -->
                <td colspan=2><h1>Bem vindo(a) <?= $u->getUser() ?></h1></td> 
                <td></td>
                
                <td>
                    <img src="<?= $u->getPhoto() ?>" alt="Imagem do perfil" width="100">
                    <br>
                    <input type="file" name="photo" id="photo">
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Dados pessoais</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="user">Nome de usuário</label>
                    <br>
                    <input type="text" name="user" id="user" value="<?= $u->getUser() ?>">
                </td>
                <td>
                    <label for="birth">Data de nascimento</label>
                    <br>
                    <input type="date" name="birth" id="birth" value="<?= $u->getBirth() ?>">
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="first-name">Nome</label>
                    <br>
                    <input type="text" name="first-name" id="first-name" value="<?= $u->getFirstName() ?>">
                </td>
                <td>
                    <label for="last-name">Sobrenome</label>
                    <br>
                    <input type="text" name="last-name" id="last-name" value="<?= $u->getLastName() ?>">
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan=4>
                    <label for="desc">Descrição (bio)</label>
                    <br>
                    <textarea name="desc" id="desc" cols="100" rows="3" placeholder="Fale sobre você" maxlength="255"><?= $u->getDesc() ?></textarea>
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Endereço</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="cep">Cep</label>
                    <br>
                    <input type="number" name="cep" id="cep" value="<?= $u->getCep() ?>">
                </td>
                <td>
                    <label for="address">Endereço</label>
                    <br>
                    <input type="text" name="address" id="address" value="<?= $u->getAddress() ?>">
                </td>
                <td>
                    <label for="number">Número</label>
                    <br>
                    <input type="number" name="number" id="number" value="<?= $u->getNumber() ?>">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <label for="complement">Complemento</label>
                    <br>
                    <input type="text" name="complement" id="complement" value="<?= $u->getComplement() ?>">
                </td>
                <td>
                    <label for="neighborhood">Bairro</label>
                    <br>
                    <input type="text" name="neighborhood" id="neighborhood" value="<?= $u->getNeighborhood() ?>">
                </td>
                <td>
                    <label for="city">Cidade</label>
                    <br>
                    <input type="text" name="city" id="city" value="<?= $u->getCity() ?>">
                </td>
                <td>
                    <label for="state">Estado</label>
                    <br>

                    <?php
                    //Lançando dado do estado para variável
                    $uf = $u->getState();
                    ?>

                    <select id="state" name="state">

                    <?=
                    //Verificando se existe dados salvos no campo
                    //estado. Caso seja nulo, aparecerá "Selecione"
                        ($uf == null)
                        ? "<option value=''>Selecione</option>"
                        : "<option value='$uf'>$uf</option>"
                    ?>

                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>
                </td>
            </tr>
            <!-- Subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Sexo</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////// -->
            <tr>
                <td>
                    <input type="radio" name="sex" id="male" value="male" <?= ($u->getSex()=="male") ? "checked" : "" ?>>
                    <label for="male">Masculino</label>
                </td>
                <td>
                    <input type="radio" name="sex" id="female" value="female" <?= ($u->getSex()=="female") ? "checked" : "" ?>>
                    <label for="female">Feminino</label>
                </td>
                <td></td>
                <td></td>
            </tr>
            <!-- Subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Contatos</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////// -->
            <tr>
                <td>
                    <label for="phone">Telefone</label>
                    <br>
                    <input type="tel" name="phone" id="phone" pattern="[0-9]{2}-[0-9]{9}" value="<?= $u->getPhone() ?>">
                </td>
                <td>
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" value="<?= $u->getEmail() ?>">
                </td>
                <td colspan=2>
                    <input type="checkbox" name="notify" id="notify" <?= ($u->getNotify()==1) ? "checked" : "" ?>>
                    <label for="notify">Desejo receber notificações</label>
                </td>
            </tr>
            <!-- Linha para subtítulo -->
            <tr>
                <td colspan=4>
                    <h3>Senha</h3>
                    <hr>
                </td>
            </tr>
            <!-- ///////////////////// -->
            <tr>
                <td>
                    <label for="actual-pass">Senha atual</label>
                    <br>
                    <input type="password" name="actual-pass" id="actual-pass" class="show-pass" value="<?= $u->getPass() ?>">
                </td>
                <td>
                    <label for="new-pass">Nova senha</label>
                    <br>
                    <input type="password" name="new-pass" id="new-pass" class="show-pass">
                </td>
                <td>
                    <label for="confirm-pass">Cofirmação de senha</label>
                    <br>
                    <input type="password" name="confirm-pass" id="confirm-pass" class="show-pass">
                </td>
                <td id="show-pass">😲</td>
            </tr>
            <!-- Botões do formulário -->
            <tr>
                <td colspan=4>
                    <br>
                   <input type="submit" value="Salvar">
                   <input type="reset" value="Limpar">
                </td>
            </tr>
            <!-- ///////////////////// -->
        </table>
    </form>

<?php
//Importação do rodapé
include "/xampp/htdocs/aula13_noite/src/controller/footer.php";
