<?php
echo <<<HTML
<form method="post">
  <input type="text" name="nome">
  <button type="submit">Mostrar</button>
</form>
HTML;

if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
  $nome = addslashes($_POST["nome"]);
  echo $nome;
} else {
  echo "Preencha o campo com o seu nome!";
}
