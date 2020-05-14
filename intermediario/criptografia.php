<?php

// MD5
$id = 123;
$id_cript = md5($id);

echo "<p>id padrão: $id</p>";
echo "<p>id cripto: $id_cript</p>";

// base
$id_base = base64_encode($id);

echo "<p>id base64_encode: $id_base</p>";
echo "<p>id base64_decode: " . base64_decode($id_base) . "</p>";
