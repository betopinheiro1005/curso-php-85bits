<?php

include_once "conexao.php";

$statement = $pdo->query('SELECT * FROM funcionario');
$funcionarios = $statement->fetchAll();

foreach ($funcionarios as $funcionario) {
    echo $funcionario['nome']."</br>";
}