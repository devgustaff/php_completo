<?php

$array = ["teste1", "teste2"];
var_dump($array);

// add elementos no fim
array_push($array, "teste3");
var_dump($array);

// remover elementos do fim
array_pop($array);
var_dump($array);

// add elemento no inicio
array_unshift($array, "teste0");
var_dump($array);

// remove elemento do inicio
array_shift($array);
var_dump($array);

// retornando valores
$values = array_values($array);
var_dump($values);

// retornando as chaves
$keys = array_keys($array);
var_dump($keys);