<?php

$pessoas = ["Ricardo" => 53, "Lucas" => 31, "Paulo" => 43, "Mateus" => 25, "Alexandre" => 36];

asort($pessoas);

echo "<h3>Ordem Crescente por valor</h3>";

var_dump($pessoas);

arsort($pessoas);

echo "<br>";

echo "<h3>Ordem Decrescente por valor</h3>";

var_dump($pessoas);

echo "<br>";

ksort($pessoas);

echo "<h3>Ordem Crescente por chave</h3>";

var_dump($pessoas);

echo "<br>";

krsort($pessoas);

echo "<h3>Ordem Decrescente por chave</h3>";

var_dump($pessoas);

?>
