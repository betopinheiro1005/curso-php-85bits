<?php

include 'conexao.php';

$statement = $pdo->query("SELECT edicao, id, titulo FROM livro order by edicao");
$livrosPorEdicao = $statement->fetchAll(PDO::FETCH_GROUP);

foreach ($livrosPorEdicao as $key => $livros) {
    echo "Livros na $key ª edição: </br>";
    foreach ($livros as $livro) {
        echo "-- {$livro['titulo']} </br>";
    }
    echo "<br/>";
}
