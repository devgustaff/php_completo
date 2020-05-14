<?php

require_once "../config/banco.php";

if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
  $nome =  addslashes($_POST["nome"]);
  $email =  addslashes($_POST["email"]);
  $senha =  addslashes(md5($_POST["senha"]));

  if (inserir($nome, $email, $senha, getConnection())) {
    header("Location: ../index.php");
  } else {
    header("Location: ../adicionar.php");
  }
} else {
  header("Location: ../adicionar.php");
}
