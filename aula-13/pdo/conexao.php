<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false, //para funcionar bind no limit
];

$servidor = "localhost";
$banco = "livraria";
$usuario = "root";
$senha = '';
$porta = 3306;

$dsn = "mysql:host=$servidor;port=$porta;dbname=$banco;charset=utf8";

$pdo = new PDO($dsn, $usuario, $senha, $options);

// var_dump($pdo);