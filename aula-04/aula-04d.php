<?php

$pessoas = [
  ["nome" => "João", "cpf" => "123"],
  ["nome" => "Maria", "cpf" => "456"]
];

foreach($pessoas as $pessoa){
  print "Nome: " . $pessoa['nome'] . " - CPF: " . $pessoa['cpf'] . "<br>";
}

?>
