<?php

require_once "config/banco.php";

if (empty($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

if (isset($_GET["id"]) && !empty($_GET["id"])) {
  $id = intval($_GET["id"]);

  if (deletar($id, getConnection())) {
    header("Location: index.php");
  } else {
    header("Location: index.php");
  }
}
