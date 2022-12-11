<?php

include_once "conexao.php";

/*if (!isset($_GET['nome'])  &&   !isset($_GET['sobrenome']) &&   !isset($_GET['Telefone']) &&   !isset($_GET['Email'])) {
  header("Location:tela_formulario_cadastro.php");
}*/

cadastrar_usuarios($_GET['nome'], $_GET['sobrenome'], $_GET['Telefone'], $_GET['Email']);
header("Location:login.php");
