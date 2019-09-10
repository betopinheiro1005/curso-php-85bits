<?php

include 'conexao.php';

$sql = "SELECT * FROM livro WHERE titulo LIKE ?";

$statement = $pdo->prepare($sql);
$statement->execute(['%do%']);

foreach($statement as $livro){
    echo $livro['titulo']."</br>";
}