<?php
if (isset($_FILES["arquivo"]) && !empty($_FILES["arquivo"])) {
  $arquivo = $_FILES["arquivo"];
  $nomeAlterado = md5(time() . rand(0, 999)) . ".jpg";

  move_uploaded_file($arquivo["tmp_name"], "arquivos/" . $nomeAlterado);
  echo "Sucesso";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
</head>

<body>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button type="submit">Enviar</button>
  </form>
</body>

</html>