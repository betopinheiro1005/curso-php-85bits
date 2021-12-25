<?php

include_once "pdo/conexao.php";

$statement = $pdo->query("SELECT nome FROM funcionario");
$funcionario = $statement->fetch();

echo $funcionario['nome'];