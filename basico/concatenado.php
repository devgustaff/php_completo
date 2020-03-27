<?php

$nome = "Fulano";
$idade = 20;
$altura = 1.80;
$solteiro = true;
$habilidades = array(
  "ágil",
  "proativo",
  "autodidata"
);

echo "<p>Nome: " . $nome . "</p>";
echo "<p>Idade: " . $idade . "</p>";
echo "<p>Altura: " . number_format($altura, 2) . "</p>";
echo "<p>Solteiro: " . ($solteiro ? "true" : "false") . "</p>";
echo "<p>Habilidades: " . $habilidades[0] . "</p>";