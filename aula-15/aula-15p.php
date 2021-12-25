<?php

include 'conexao.php';

class Livro {
    public function __construct($etiqueta = null) {
        $this->etiqueta = $etiqueta;
    }
}

$statement = $pdo->query("SELECT * FROM livro");
$livro = $statement->fetchObject(Livro::class, [123456]);

echo "<pre>";
print_r($livro);
echo "</pre>";