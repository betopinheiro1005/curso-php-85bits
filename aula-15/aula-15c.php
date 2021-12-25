<?php
include 'conexao.php';

$statement = $pdo->query('SELECT * FROM funcionario');
$funcionario = $statement->fetch(PDO::FETCH_BOTH);

echo "<pre>";
print_r($funcionario);
echo "</pre>";