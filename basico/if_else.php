<?php

$nome = "Fulano";
$idade = 25;

if ($nome === "Fulano") {
  echo "<p>Nome está correto!</p>";
} else {
  echo "<p>Nome está incorreto!</p>";
}

if ($nome === "Fulano" && $idade > 20) {
  echo "<p>Nome está correto!</p>";
}

if ($nome === "Fulano" || $idade <= 20) {
  echo "<p>Está na lista!</p>";
} else {
  echo "<p>Não está na lista</p>";
}
