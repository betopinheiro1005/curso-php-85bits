<?php

include 'conexao.php';
include 'Funcionario.php';
include 'Habilitacao.php';

$statement = $pdo->prepare(
    "SELECT * FROM funcionario "
    . "LEFT JOIN habilitacao "
    . "ON funcionario.id = habilitacao.funcionario_id"
);

$statement->execute();

$funcionarios = $statement->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, Funcionario::class);

foreach ($funcionarios as $funcionario) {
    echo "{$funcionario->nome} com Habilitação nº {$funcionario->habilitacao->numero} <br/>";
}