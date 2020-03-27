<?php

if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
  echo "Nome digitado foi: " . $_POST["nome"];
} else {
  echo "Digite seu nome!";
}
