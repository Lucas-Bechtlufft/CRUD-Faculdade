<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css" />

    <title>Tela de login</title>

    <title>Login</title>
</head>

<body>
    <div>
        <h1>Login</h1>
        <form enctype="multipart/form-data" method="post" action="">
            <p>Login</p>
            <input type="text" name="login" placeholder="Digite seu login">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Digite sua senha.">
            <input class="Enviar" type="submit">
        </form>
    </div>

</body>

</html>



<?php
$login = "admin";
$senha = "123";

//Informar se a variavel foi iniciada 
if (isset($_POST["login"])) {
    // Verificando se o login e senha estão corretos
    if ($_POST['login'] == $login and $_POST['senha'] == $senha) {
        echo "Login efetuado com sucesso";

        header("Location: login.php");
    } else {
        echo "Login ou senha inválido";
    }
}

?>