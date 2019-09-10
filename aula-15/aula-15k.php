<?php

include_once "conexao.php";

$statement = $pdo->query('SELECT preco, titulo FROM livro');
$livros = $statement->fetchAll(PDO::FETCH_FUNC, function($preco, $titulo){
    $preco_no_cartao = round($preco + ($preco * 0.1),2);
    return "$titulo: R$ {$preco} à vista e no cartão R$ {$preco_no_cartao}";
});

foreach ($livros as $preco) {
    echo $preco."</br>";
}