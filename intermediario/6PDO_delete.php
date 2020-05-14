<?php

$dsn = "mysql:host=localhost; dbname=controle_usuarios";
$dbuser = "root";
$dbpass = "";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $id = "";

  $sql = "DELETE FROM usuarios WHERE id = ?";

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(1, $id);
  $stmt->execute();
} catch (PDOException $e) {
  die("Erro na conexão: " . $e->getMessage());
}
