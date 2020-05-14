<?php
session_start();

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <title>Login</title>
</head>

<body>
  <header id="topoLogin" class="center">
    <h1>Controle Usuários</h1>
  </header>
  
  <section id="conteudoLogin" class="center">
    <form action="includes/logar.php" method="post">
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="senha" placeholder="Senha">
      <button type="submit">Entrar</button>
    </form>
  </section>
</body>

</html>