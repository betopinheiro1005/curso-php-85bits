<?php

$nome = "João";
$cpf = "123";
$rg = "8888";
$filhos = ["Maria", "Thiago", "Carlos"];

$result = compact("nome", "cpf", "rg", "filhos");

echo "<pre>";
print_r($result);
echo "</pre>";

?>
