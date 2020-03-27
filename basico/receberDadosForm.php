<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados Formulário</title>
</head>

<body>
  <form action="" method="POST">
    <input type="text" placeholder="Digite seu nome" name="nome">
    <button type="submit">Enviar</button>
  </form>
</body>

</html>

<?php

if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
  echo "<br>Bem vindo " . $_POST["nome"];
} else {
  echo "<br>Você precisa informar o nome!";
}