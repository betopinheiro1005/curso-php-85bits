<?php

include_once "conexao.php";

$statement = $pdo->query('SELECT * FROM editora LEFT JOIN livro ON livro.editora_id = editora.id');
$registros = $statement->fetchAll(PDO::FETCH_NAMED);

foreach ($registros as $registro) {
    echo "editora id {$registro['id'][0]} e livro {$registro['id'][1]} <br/>";
}