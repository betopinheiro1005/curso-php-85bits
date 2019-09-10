<?php

$alunos = [
  ["nome" => "João", "nota" => 8],
  ["nome" => "Maria", "nota" => 4],
  ["nome" => "Thiago", "nota" => 7]
];

$alunos_aprovados = array_filter($alunos, function($aluno){
  return $aluno['nota'] >= 7;
});

echo "<pre>";
print_r($alunos_aprovados);
echo "</pre>";

?>
