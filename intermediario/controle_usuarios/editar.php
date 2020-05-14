<?php
require_once "config/banco.php";

if (empty($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

if (isset($_GET["id"]) && !empty($_GET["id"])) {
  $id = addslashes(intval($_GET["id"]));
  $usuario = editarUsuario($id, getConnection());

  if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);

    if (atualizar($id, $nome, $email, getConnection())) {
      header("Location: index.php");
    } else {
      header("Location: editar.php?id=" . $id);
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Adicionar</title>
</head>

<body>
  <header id="topoIndex" class="center">
    <a href="includes/sair.php">Sair</a>
    <h1>Editar</h1>
  </header>

  <section id="conteudo">
    <a href="index.php">Voltar</a>
    
    <form method="post">
      <input type="text" name="nome" placeholder="Nome" value="<?php echo $usuario["nome"]; ?>"><br>
      <input type="email" name="email" placeholder="Email" value="<?php echo $usuario["email"]; ?>"><br>
      <button type="submit">Atualizar</button>
    </form>
  </section>
</body>

</html>