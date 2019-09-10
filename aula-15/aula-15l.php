<?php

//recuperando dados
include_once "conexao.php";
include_once "Livro.php";

$sth = $pdo->prepare("SELECT * FROM livro");
$sth->execute();
$result = $sth->fetchAll(\PDO::FETCH_CLASS, 'Livro');

echo "<pre>";
print_r($result);
echo "</pre>";