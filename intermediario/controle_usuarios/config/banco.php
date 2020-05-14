<?php
session_start();

function getConnection()
{
  $dsn = "mysql: host=localhost; dbname=controle_usuarios";
  $dbuser = "root";
  $dbpass = "";
  $pdo = null;

  try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Failed connection: " . $e->getMessage());
  }

  return $pdo;
}

function inserir($nome, $email, $senha, $pdo)
{
  if (email_exists($email, $pdo) == false) {
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $nome);
    $stmt->bindValue(2, $email);
    $stmt->bindValue(3, $senha);

    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
}

function email_exists($email, $pdo)
{
  $sql = "SELECT * FROM usuarios WHERE email = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(1, $email);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    return true;
  } else {
    return false;
  }
}

function editarUsuario($id, $pdo)
{
  $sql = "SELECT * FROM usuarios WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(1, $id);
  $stmt->execute();

  $rows = array();

  if ($stmt->rowCount() > 0) {
    $rows = $stmt->fetch();
  }
  return $rows;
}

function atualizar($id, $nome, $email, $pdo)
{
  $sql = "UPDATE usuarios SET nome = ?, email= ? WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(1, $nome);
  $stmt->bindValue(2, $email);
  $stmt->bindValue(3, $id);

  if ($stmt->execute()) {
    return true;
  } else {
    return false;
  }
}

function getUsuarios($pdo)
{
  $sql = "SELECT * FROM usuarios";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

  $rows = array();

  if ($stmt->rowCount() > 0) {
    $rows = $stmt->fetchAll();
  }
  return $rows;
}

function deletar($id, $pdo)
{
  $sql = "DELETE FROM usuarios WHERE id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(1, $id);

  if (!$stmt->execute()) {
    return false;
  } else {
    return true;
  }
}

function logar($email, $senha, $pdo)
{
  $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(1, $email);
  $stmt->bindValue(2, $senha);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch();
    $_SESSION["login"] = $row["id"];
    return true;
  } else {
    return false;
  }
}

function deslogar()
{
  unset($_SESSION["login"]);
  return true;
}
