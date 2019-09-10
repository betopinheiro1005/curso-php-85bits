<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //ver erros de query
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$servidor = "localhost";
$banco = "livraria";
$usuario = "85bits";
$senha = "admin";

$dsn = "sqlsrv:Server=$server;Database=$banco";

$pdo = new PDO($dsn, $usuario, $senha, $options);