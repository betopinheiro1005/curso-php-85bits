<?php

include_once "conexao.php";

$statement = $pdo->query('SELECT * FROM livro');
$livros = $statement->fetchAll(PDO::FETCH_OBJ);

foreach ($livros as $livro) {
    echo "instância de ".get_class($livro).":";
    echo $livro->titulo."</br>";
}