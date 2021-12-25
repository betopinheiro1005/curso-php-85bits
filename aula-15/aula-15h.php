<?php

include_once "conexao.php";

$statement = $pdo->query('SELECT * FROM livro');
$livro = $statement->fetch(PDO::FETCH_LAZY);

echo "ISBN: {$livro['isbn']} : {$livro->titulo} </br>";