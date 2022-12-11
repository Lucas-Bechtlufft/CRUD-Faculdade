<?php

//$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

function conectaBD()
{
  $host = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "contato";

  $bd = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  if ($bd == null) {
    echo "Erro ao conectar no banco de dados";
  }
  return $bd;
}

function cadastrar_usuarios($nome, $sobrenome, $Telefone, $Email)
{
  $con = conectaBD();
  $sql = "INSERT INTO usuarios (id, nome, sobrenome, Telefone, Email) VALUES (null, '$nome' , '$sobrenome','$Telefone','$Email') ";

  $resultQuery = $con->query($sql);
  if ($resultQuery == null) {
    echo "Erro ao inserir no banco de dados";
    return false;
  }
  return true;
}

function editar_usuarios($id, $nome, $sobrenome, $Telefone, $Email)
{
  $con = conectaBD();
  $sql = "update usuarios set nome='$nome', sobrenome='$sobrenome', Telefone='$Telefone', Email='$Email' where id='$id'";
  $resultQuery = $con->query($sql);
  if ($resultQuery == null) {
    echo "Erro ao inserir no banco de dados";
    return false;
  }
  return true;
}

function recuperaArrayUsuarios()
{
  $con = conectaBD();
  $sql = "SELECT * FROM usuarios";
  $resultQuery = $con->query($sql);
  // Retorna um array com todas as linhas da consulta.
  $arrayUsuarios = $resultQuery->fetchAll(PDO::FETCH_ASSOC);
  //        echo "<pre> ";
  //       print_r($arrayUsuarios);
  //     echo "</pre> ";
  return  $arrayUsuarios;
}

function excluirUsuario($id)
{
  $con = conectaBD();
  $sql = "DELETE  FROM usuarios WHERE id = $id";
  $con->query($sql);
}
