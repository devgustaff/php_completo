<?php
if (isset($_FILES["arquivos"]) && !empty($_FILES["arquivos"])) {
  $arquivos = $_FILES["arquivos"];

  if (count($arquivos["name"] > 0)) {
    for ($c = 0; $c < count($arquivos["name"]); $c++) {
      $nomeAlt = md5(time() . rand(0, 999));
      move_uploaded_file($arquivos["tmp_name"][$c], "arquivos/" . $nomeAlt . ".jpg");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Múltiplo</title>
</head>

<body>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="arquivos[]" multiple><br>
    <button type="submit">Enviar</button>
  </form>
</body>

</html>