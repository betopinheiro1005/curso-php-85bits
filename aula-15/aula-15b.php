<?php

include 'conexao.php';

$statement = $pdo->query("SELECT nome, id FROM funcionario");

//$statement = $pdo->query("SELECT titulo, id FROM livro");
$dados = $statement->fetchAll(PDO::FETCH_NUM);

foreach ($dados as $dado) {
    echo "nome: $dado[0] | id: $dado[1] <br/>";
}