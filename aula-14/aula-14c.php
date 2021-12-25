<?php

include 'conexao.php';

$nome = 'Edson Wander';
$cpf = '54698715324';

$stmt = $pdo->prepare('SELECT * FROM funcionario WHERE nome = ? AND cpf = ?');

$stmt->bindParam(1, $nome,PDO::PARAM_STR);
$stmt->bindParam(2, $cpf,PDO::PARAM_STR);
$stmt->execute();

$funcionario = $stmt->fetch();

echo "<pre>";
print_r($funcionario);
echo "</pre>";