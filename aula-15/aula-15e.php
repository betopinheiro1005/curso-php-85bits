<?php

include_once "conexao.php";

$statement = $pdo->query('SELECT id,nome,cpf FROM funcionario');
$funcionarios = $statement->fetchAll(PDO::FETCH_UNIQUE);

foreach ($funcionarios as $id => $funcionario) {
    echo $id.":".$funcionario['nome']."</br>";
}