<?php

function connectDB()
{
  $dsn = "mysql:host=localhost; dbname=projeto_comentarios";
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

function createComments($pdo, $name, $comments)
{
  $sql = "INSERT INTO posts (name, comments, date_now) VALUES (?, ?, NOW())";

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(1, $name);
  $stmt->bindValue(2, $comments);

  if ($stmt->execute()) {
    return true;
  }

  return false;
}

function readComments($pdo)
{
  $sql = "SELECT * FROM posts";

  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    return $stmt->fetchAll();
  }

  return false;
}
