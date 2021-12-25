<?php

$alunos = ["Carlos", "Maria"];

array_push($alunos, "Francisco", "Osvaldo");

echo "<pre>";
print_r($alunos);
echo "</pre>";

array_pop($alunos);

echo "<pre>";
print_r($alunos);
echo "</pre>";

array_shift($alunos);

echo "<pre>";
print_r($alunos);
echo "</pre>";

?>
