<?php

function connectDB()
{
  $dsn = "mysql:host=localhost; dbname=ordenacao_resultados";
  $dbuser = "root";
  $dbpass = "";

  try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Error on connection: " . $e->getMessage());
  }

  return $pdo;
}
