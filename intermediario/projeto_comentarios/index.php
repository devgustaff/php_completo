<?php
require_once "logica-banco.php";
$connection = connectDB();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <fieldset>
    <legend>
      <h1>Comentários</h1>
    </legend>

    <form action="form-action.php" method="post">
      <input type="text" name="name" placeholder="Nome"><br><br>
      <textarea name="comments" placeholder="Digite seu comentário" cols="30" rows="10"></textarea><br>
      <button type="submit">Enviar</button>
    </form>
  </fieldset>

  <br>
  <hr>

  <?php
  if ($comments = readComments($connection)) :
    foreach ($comments as $comment) :
  ?>

      <strong><?php echo $comment["name"] ?></strong>
      <p><?php echo $comment["comments"] ?></p>
      <hr>

  <?php
    endforeach;
  else :
    echo "<strong>Sem comentários</strong>";
  endif;
  ?>

</body>

</html>