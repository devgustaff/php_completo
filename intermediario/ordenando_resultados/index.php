<?php

require_once "order.php";

$order = "";

if (isset($_GET["order"]) && !empty($_GET["order"])) $order = addslashes($_GET["order"]);

$results = orderBy($order, connectDB());
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordenação</title>
</head>

<body>
  <form method="GET">
    <select name="order" onchange="this.form.submit();">
      <option value="">-- Ordenar --</option>
      <option value="nome" <?php echo $order === "nome" ? "selected" : "" ?>>Nome</option>
      <option value="idade" <?php echo  $order === "idade" ? "selected" : "" ?>>Idade</option>
    </select>
  </form>

  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Idade</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($results as $result) : ?>
        <tr>
          <td><?php echo $result["nome"] ?></td>
          <td><?php echo $result["idade"] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>