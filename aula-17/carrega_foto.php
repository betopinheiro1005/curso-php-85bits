<?php

include 'conexao.php';

$id = $_REQUEST['funcionario_id'];

try {
    $statement = $pdo->prepare("SELECT * FROM foto WHERE funcionario_id = ? ");
    $statement->execute([$id]);
    $foto = $statement->fetch(PDO::FETCH_ASSOC);
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

ob_clean();
header("Content-type: {$foto['mimetype']}");

if (is_resource($foto['binario'])) {
    echo stream_get_contents($foto['binario']);
} else {
    echo ($foto['binario']);
}