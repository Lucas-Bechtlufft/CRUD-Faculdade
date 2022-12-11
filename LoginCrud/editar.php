<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda Telefônica/Editar</title>
  <?php
  $id = $_REQUEST['id'];
  $nome = $_REQUEST['nome'];
  $sobrenome = $_REQUEST['sobrenome'];
  $Telefone = $_REQUEST['Telefone'];
  $Email = $_REQUEST['Email'];
  ?>
</head>

<body>
  <div id="conteudo">
    <h1>Alterar Contato</h1>
    <p>
    <form action="editar_usuario.php">
      <input type="hidden" name="id" value="<?php echo $id ?>" />
      Nome: <input type="text" name="nome" value="<?php echo $nome ?>" /> <br>
      Sobrenome: <input type="text" name="sobrenome" value="<?php echo $sobrenome ?>" /> <br>
      Telefone: <input type="Telefone" name="Telefone" value="<?php echo $Telefone ?>" /> <br>
      Email: <input type="Email" name="Email" value="<?php echo $Email ?>" /> <br>
      <input type="Submit" value="Alterar" />

    </form>
    </p>
  </div>
</body>

</html>