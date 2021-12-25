<?php

include_once "conexao.php";

class Autor {}

class Funcionario {}

$statement = $pdo->query(
    "SELECT 'Autor', nome FROM autor
    UNION
    SELECT 'Funcionario', nome FROM funcionario"
);

$objeto = $statement->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_CLASSTYPE);

echo "<pre>";
print_r($objeto);
echo "</pre>";