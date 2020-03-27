<?php
$var1 = array(
  "ch1" => "val1",
  "ch2" => "val2",
);

$var2 = array("valor1", "valor2", "valor3");

$var3 = array(
  "arr1" => array(
    "nome" => "Fulano",
    "idade" => 20
  ),
  "arr2" => array(
    "nome" => "Ciclano",
    "idade" => 15
  )
);

echo $var1["ch1"];
echo $var1["ch2"];
echo $var2[0];
echo $var2[1];
echo $var3["arr1"]["nome"];

echo "<pre>";
print_r($var3);
var_dump($var3);