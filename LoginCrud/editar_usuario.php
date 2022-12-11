<?php
include_once "conexao.php";



//$link = mysqli_connect("localhost", "root", "", "contatos");

editar_usuarios($_GET['id'], $_GET['nome'], $_GET['sobrenome'], $_GET['Telefone'], $_GET['Email']);
header("Location:login.php");
