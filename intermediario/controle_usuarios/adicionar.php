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
    <h1>Adicionar</h1>
  </header>
  
  <section id="conteudo">
    <a href="index.php">Voltar</a>
    
    <form action="includes/salvar.php" method="post">
      <input type="text" name="nome" placeholder="Nome"><br>
      <input type="email" name="email" placeholder="Email"><br>
      <input type="password" name="senha" placeholder="Senha"><br>
      <button type="submit">Cadastrar</button>
    </form>
  </section>
</body>

</html>