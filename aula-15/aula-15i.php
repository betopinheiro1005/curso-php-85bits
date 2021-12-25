<?php
include 'conexao.php';

$query = "SELECT id, nome, cpf FROM funcionario";

$statement = $pdo->query($query);
$statement->bindColumn(1, $id);
$statement->bindColumn(2, $nome);
$statement->bindColumn('cpf', $cpf);

while ($row = $statement->fetch(PDO::FETCH_BOUND)) {
    echo "$id:" . $nome . " " . $cpf . "</br>";
}