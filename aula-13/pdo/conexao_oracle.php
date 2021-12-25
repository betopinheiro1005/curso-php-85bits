<?php

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_CASE => PDO::CASE_LOWER
];

$servidor = "localhost";
$usuario = "php";
$senha = "admin";
$service_name = "XE";
$sid = "XE";
$port = 1521;

$dbtns = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = $servidor)(PORT = $port)) (CONNECT_DATA =
(SERVICE_NAME = $service_name) (SID = $sid)))";

$pdo = new PDO("oci:dbname=" . $dbtns . ";charset=utf8", $usuario, $senha, $options);