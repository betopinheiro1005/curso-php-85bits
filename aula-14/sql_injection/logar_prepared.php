<?php

include_once '../conexao.php';

$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

$query = "SELECT * FROM usuario WHERE login = ? AND senha = ?";

$statement = $pdo->prepare($query);
$statement->execute([$login, $senha]);
$usuario = $statement->fetch();

if($usuario){
    echo "Usuário {$usuario['login']} logado com sucesso!";
} else {
    echo "Usuário não encontrado ou senha errada!";
}