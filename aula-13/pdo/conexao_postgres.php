<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$servidor = "localhost";
$banco = "livraria";
$usuario = "postgres";
$senha = "admin";
$porta = 5432;

$dsn = "pgsql:host=$servidor;port=$porta;dbname=$banco;";

$pdo = new PDO($dsn, $usuario, $senha, $options);

// var_dump($pdo);