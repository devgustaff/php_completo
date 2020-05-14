<?php
require_once "../config/banco.php";

if (isset($_POST["email"]) && !empty($_POST["email"])) {
  $email = addslashes($_POST["email"]);
  $senha = addslashes(md5($_POST["senha"]));

  if (logar($email, $senha, getConnection())) {
    header("Location: ../index.php");
  } else {
    header("Location: ../index.php");
  }
} else {
  header("Location: ../index.php");
}
