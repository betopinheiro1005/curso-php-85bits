<?php

include_once "pdo/conexao_postgres.php";

$statement = $pdo->query('SELECT nome FROM funcionario');

foreach ($statement as $linha){
    echo $linha['nome'] . "<br>";
}