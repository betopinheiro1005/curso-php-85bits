<?php

include 'conexao.php';

$statement = $pdo->query('SELECT titulo, preco FROM livro');
$metadados = $statement->getColumnMeta(0);

echo "<pre>";
print_r($metadados);
echo "</pre>";
