<?php

$frutas = array(
  "laranja",
  "uva",
  "manga"
);

$alunos = array(
  array(
    "nome" => "Fulano",
    "idade" => 20
  ),
  array(
    "nome" => "Ciclano",
    "idade" => 19
  )
);

foreach ($frutas as $fruta) {
  echo "<span>" . $fruta . "<span><br>";
}

foreach ($alunos as $aluno) {
  echo "<span>" . $aluno["nome"] . "<span><br>";
}

foreach($alunos as $key => $aluno) {
  echo "<span>" . $key . " " . $aluno["nome"] . "<span><br>";
}