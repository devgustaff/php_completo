<?php
require_once "config/banco.php";

$usuarios = getUsuarios(getConnection());

if (empty($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Usuários</title>
</head>

<body>
  <header id="topoIndex" class="center">
    <a href="includes/sair.php">Sair</a>
    <h1>Usuários</h1>
  </header>
  
  <section id="conteudo">
    <div>
      <a href="adicionar.php">Adicionar</a>
    </div>

    <table>
      <?php foreach ($usuarios as $usuario) : ?>
        <tr>
          <td><?php echo $usuario["nome"] ?></td>
          <td><?php echo $usuario["email"] ?></td>
          <td><a href="editar.php?id=<?php echo $usuario["id"] ?>">Editar</a></td>
          <td><a class="del" href="excluir.php?id=<?php echo $usuario["id"] ?>">Excluir</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </section>
</body>

</html>