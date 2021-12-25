<?php

$pessoas = [
  ["id" => 1, "nome" => "João", "idade" => 43],
  ["id" => 2, "nome" => "Maria", "idade" => 16],
  ["id" => 3, "nome" => "Thiago", "idade" => 18]
];

$nomes = array_column($pessoas, 'nome', 'idade');

echo "<pre>";
print_r($nomes);
echo "</pre>";

?>
