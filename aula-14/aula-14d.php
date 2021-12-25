<?php
include 'conexao.php';

$stmt2 = $pdo->prepare('SELECT * FROM funcionario WHERE nome = ? AND cpf = ?');

$stmt2->bindValue(1, 'Edson Wander',PDO::PARAM_STR);
$stmt2->bindValue(2, '54698715324',PDO::PARAM_STR);
$stmt2->execute();

$funcionario2 = $stmt2->fetch();

echo "<pre>";
print_r($funcionario2);
echo "</pre>";