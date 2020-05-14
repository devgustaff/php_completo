<?php

$dsn = "mysql:host=localhost; dbname=controle_usuarios";
$dbuser = "root";
$dbpass = "";

try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Conectado com sucesso.";
} catch (PDOException $err) {
  die("Erro na conexão: " . $err->getMessage());
}
