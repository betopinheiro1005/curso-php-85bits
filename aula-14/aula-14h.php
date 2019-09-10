<?php

include_once "conexao.php";

//PDO fetchColumn

$statement = $pdo->query("SELECT id, titulo FROM livro");

echo "<pre>";
print_r($statement->fetchColumn());
echo "</pre>";

echo "<pre>";
print_r($statement->fetchColumn(1));
echo "</pre>";
