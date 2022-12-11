<?php

include_once "conexao.php";

/*if (!isset($_GET['nome'])  &&   !isset($_GET['sobrenome']) &&   !isset($_GET['Telefone']) &&   !isset($_GET['Email'])) {
  header("Location:tela_formulario_cadastro.php");
}*/

excluirUsuario($_REQUEST['id']);
header("Location:login.php");
