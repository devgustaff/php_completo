<?php

function saudacao()
{
  echo "Sejam bem vindos!";
}

saudacao();

function mostrarNome($nome)
{
  return $nome;
}

mostrarNome("Gustavo");

function somar($a, $b)
{
  return $a + $b;
}

echo somar(2, 3);
