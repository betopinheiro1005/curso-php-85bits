<?php

include_once "conexao.php";

$nome = 'Edson Wander';
$cpf = '54698715324';

//posicional

$statement = $pdo->prepare('SELECT * FROM funcionario WHERE nome = ? AND cpf = ?');
$statement->execute([$nome, $cpf]);
$funcionario = $statement->fetch();

if($funcionario){
    echo "Usuário {$funcionario['nome']} logado com sucesso!";
} else {
    echo "Usuário não encontrado ou senha errada!";
}

?>