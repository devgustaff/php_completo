<?php
// d -> 01 a 31 - dia do més
// m -> 01 a 31 - més
// Y -> ano
// H -> hora 
// i -> minutos 
// s -> segundos
echo date("d/m/Y \à\s H:i:s"); 

// tempo
echo  "<br>"  . time() . "<br>";

echo strtotime("+1 day") . "<br>";
echo date("d/m/Y", strtotime("+5 days"));
