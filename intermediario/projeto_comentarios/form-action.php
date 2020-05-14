<?php

require_once "logica-banco.php";

$connection = connectDB();

if (isset($_POST["name"]) && !empty($_POST["name"])) {
  $name = addslashes($_POST["name"]);
  $comments = addslashes($_POST["comments"]);

  if (createComments($connection, $name, $comments)) {
    header("Location: index.php");
  }
}
