<?php
require_once "conexao.php";
// Retorna um array com todas as linhas da consulta.
$arrayUsuarios = recuperaArrayUsuarios();


if (session_start()) {

    //cria a listaCadastro
    if (!isset($_SESSION['listaCadastro'])) $_SESSION['listaCadastro'] = [];

    $retorno = "";

    if ($_POST) {

        if (empty($_POST['nome']) || empty($_POST['sobrenome']) || empty($_POST['Telefone']) || empty($_POST['Email'])) {
            $retorno = 'Por Favor, preencher todos os campos';
        } else {
            $_SESSION['listaCadastro'][] = $_POST;
            $retorno = 'Sucesso';
        }
    }
}

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Cadastro</title>
</head>

<body>

    <div>
        <h1 id="titulo">Agenda De Contatos</h1>
        <br>
    </div>

    <!-- Enviando para cadastro_usuarios através do action -->
    <form method="GET" action="cadastro_usuarios.php">

        <fieldset class="teste">
            <div class="baralho">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="baralho">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>


        <div class="baralho">
            <label for="Telefone"><strong>Telefone</strong></label>
            <input type="Telefone" name="Telefone" id="Telefone" required>
        </div>


        <div class="baralho">
            <br>
            <label for="Email"><strong>Email</strong></label>
            <textarea style="width: 26em" id="Email" name="Email"></textarea>
        </div>
        <br>
        <button class="botao" type="submit" value="Cadastrar" name="CadUsuario" onsubmit="">Concluído</button>


        <?php
        //se nao estiver vazio o retorno, exibe a mensagem de retorno
        if (!empty($retorno)) {
            echo '<div class="baralho">';
            echo '<div class="retorno">' . $retorno . '</div>';
            echo '</div>';
        }
        ?>

    </form>

    <br>
    <br>
    <h3>Lista de Contatos Feitos</h3>
    <br>
    <?php
    //caso exista item na lista, irá exibir a tabela
    if (count($arrayUsuarios) > 0) {
    ?>
        <table id="customers">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>

            </tr>




            <?php
            //feito laço de repetição para listar cada item do array
            foreach ($arrayUsuarios as $usuario) {
            ?>
                <tr>
                    <td><?= $usuario['nome']; ?></td>
                    <td><?= $usuario['sobrenome']; ?></td>
                    <td><?= $usuario['Telefone']; ?></td>
                    <td><?= $usuario['Email']; ?></td>
                    <td><a href="<?php echo "editar.php?id=" . $usuario['id'] . "&nome=" . $usuario['nome'] . "&sobrenome=" . $usuario['sobrenome'] . "&Telefone=" . $usuario['Telefone'] . "&Email=" . $usuario['Email'] ?>">Alterar</a></td>
                    <td><a href='excluir_usuario.php?id=<?= $usuario['id'] ?>'>Excluir</a><br></td>

                </tr>
            <?php
            }
            ?>
        </table>
    <?php
    } else {
        echo 'Nenhum Contato Adicionado Ainda';
    }
    ?>
</body>

</html>