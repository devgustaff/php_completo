<?php

$dsn = "mysql:host=localhost; dbname=controle_usuarios";
$dbuser = "root";
$dbpass = "";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $nome = "";
  $email = "";
  $id = 2;

  $sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";

  $stmt = $pdo->prepare($sql);

  $stmt->bindValue(1, $nome);
  $stmt->bindValue(2, $email);
  $stmt->bindValue(3, $id);

  if ($stmt->execute()) {
    echo "Atualizado com sucesso.";
  } else {
    echo "Falha ao atualizar";
  }
  
} catch (PDOException $e) {
  die("Erro na conexão: " . $e->getMessage());
}
