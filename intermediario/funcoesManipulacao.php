<?php

$string = "show time";

// transforma uma string em array
$array = explode(" ", $string);
var_dump($array);

// transforma um array em string
$string = implode(" ", $array);
echo "<br>" . $string;

// formata as casa decimais de um numero
echo "<br>" . number_format(25.8888, 2);

// substitui algo na string
$string = "nomes,";
echo "<br>" . str_replace(",", ".", $string);
echo "<br>" . str_replace("almoçou", "jantou", "ela almoçou");

// letras minusculas
echo "<br>" . strtolower("ALGO");

// letras maiusculas
echo "<br>" . strtoupper("algo");

// retorna uma parte da string
echo "<br>" . substr("gustavo", 0, 3);

// converte para maiuscula o primeiro caracter da string
echo "<br>" . ucfirst("gustavo");
