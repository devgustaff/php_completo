<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="nota" placeholder="Digite sua nota">
    <button type="submit">Verificar</button>
  </form>
</body>

</html>

<?php

if (isset($_POST["nota"]) && !empty($_POST["nota"])) {
  $nota = intval($_POST["nota"]);

  switch ($nota) {
    case 6:
      echo "<br>Recuperação!";
      break;
    case 7:
      echo "<br>Aprovado";
      break;
    case 8:
    case 9:
      echo "<br>Aprovado com nota acima da média";
  }
} else {
  echo "<br>Digite a sua nota!";
}
