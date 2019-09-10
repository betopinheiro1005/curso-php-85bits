<?php

include_once "conexao.php";

$nome = 'Edson Wander';
$cpf = '54698715324';

//usando key e value

$statement = $pdo->prepare('SELECT * FROM funcionario WHERE nome = :nome AND cpf = :cpf');
$statement->execute(['nome' => $nome, 'cpf' => $cpf]);
$funcionario = $statement->fetch();

if($funcionario){
    echo "Usuário {$funcionario['nome']} logado com sucesso!";
} else {
    echo "Usuário não encontrado ou senha errada!";
}

?>