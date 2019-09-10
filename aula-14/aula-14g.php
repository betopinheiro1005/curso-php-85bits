<?php

include 'conexao.php';

$filtro = ["preco_minimo" => "1.98"];
$edicoes = [1,2,10];
$edicoes = array_combine(
   array_map(function($i){ return ':id'.$i; }, array_keys($edicoes)), $edicoes
);

$in_placeholders = implode(',', array_keys($edicoes));

$sql = "SELECT * FROM livro WHERE preco >= :preco_minimo AND edicao IN ($in_placeholders)";

$statement = $pdo->prepare($sql);
$statement->execute(array_merge($filtro,$edicoes));

foreach($statement as $livro){
    echo "Título: " . $livro['titulo'] . " - Edição: " . $livro['edicao'] . " - Preço: " . $livro['preco'] . "</br>";
}