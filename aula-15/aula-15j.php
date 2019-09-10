<?php

include_once "conexao.php";

$statement = $pdo->query('SELECT nome, id FROM funcionario');
$nomes = $statement->fetchAll(PDO::FETCH_COLUMN);

foreach ($nomes as $nome) {
    echo $nome."</br>";
}

$statement = $pdo->query('SELECT id, nome, cpf FROM funcionario');
$cpfs = $statement->fetchAll(PDO::FETCH_COLUMN, 2);

foreach ($cpfs as $cpf) {
    echo $cpf."</br>";
}