<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome">
    <button type="submit">Enviar</button>
  </form>
</body>

</html>

<?php
if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
  $nome = $_POST["nome"];

  file_put_contents("nomes.txt", $nome, FILE_APPEND);
  header("Location: evitarReenvio.php");
} 
