<?php

$dsn = "mysql:host=localhost; dbname=controle_usuarios";
$dbuser = "root";
$dbpass = "";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $nome = "Gustavo Silva";
  $email = "gustavo@email.com";
  $senha = md5("123");

  $sql = "INSERT INTO usuarios (nome, email, senha) 
          VALUES (?, ?, ?)";

  $stmt = $pdo->prepare($sql);

  $stmt->bindValue(1, $nome);
  $stmt->bindValue(2, $email);
  $stmt->bindValue(3, $senha);

  if ($stmt->execute()) {
    echo "INSERIDO COM SUCESSO!";
  } else {
    echo "FALHA AO INSERIR!";
  }
} catch (PDOException $error) {
  die("Erro na conexão: " . $error->getMessage());
}
