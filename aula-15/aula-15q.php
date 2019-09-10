<?php

include 'conexao.php';

class Livro {
    public $titulo;
    public $preco;
    public $isbn;
    public $edicao;
    public $ano_publicacao;
}

$livro = new Livro();
$statement = $pdo->query('SELECT * FROM livro');
$statement->setFetchMode(PDO::FETCH_INTO, $livro);
$statement->fetch();

echo "<pre>";
print_r($livro);
echo "</pre>";