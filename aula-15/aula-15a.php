<?php

include 'conexao.php';

$statement = $pdo->query('SELECT nome FROM funcionario');
$funcionarios = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($funcionarios as $funcionario) {
    echo $funcionario['nome']."</br>";
}

$statement = $pdo->query('SELECT nome FROM funcionario');
$funcionario = $statement->fetch(PDO::FETCH_ASSOC);

echo "</br>" . $funcionario['nome']."</br>";