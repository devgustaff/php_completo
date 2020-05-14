<?php

$dsn = "mysql:host=localhost; dbname=controle_usuarios";
$dbuser = "root";
$dbpass = "";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM usuarios";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    foreach ($stmt->fetchAll() as $resultado) {
      echo <<<HTML
        <li>$resultado[nome]</li>
      HTML;
    }
  }
} catch (PDOException $error) {
  die("Falha na conexão: " . $error->getMessage());
}
