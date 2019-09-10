<?php

include 'conexao.php';

try {
    $pdo->beginTransaction();
    $funcionario_id = $_REQUEST['funcionario_id'];
    $arquivo = $_FILES['foto']['tmp_name'];
    $binario = file_get_contents($arquivo);
    $mimetype = $_FILES['foto']['type'];
    $sql = "INSERT INTO foto (binario, mimetype, funcionario_id) ";
    $sql_values = " VALUES (:binario, :mimetype, :funcionario_id)";
    $driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);

    if ($driver == 'oci') {
        $sql_values = " VALUES (EMPTY_BLOB(), :mimetype, :funcionario_id)"
        . " RETURNING binario INTO :binario";
    }

    $statement = $pdo->prepare($sql . $sql_values);

    switch ($driver) {
        case 'sqlsrv':
            $statement->bindParam('binario', $binario, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
            break;
        case 'oci':
            $statement->bindParam('binario', $binario_resource, PDO::PARAM_LOB);
            $binario_resource = fopen($arquivo, 'rb');
            break;
        default:
            $statement->bindParam('binario', $binario, PDO::PARAM_LOB);
            break;
    }
    
    $statement->bindValue('mimetype', $mimetype, PDO::PARAM_STR);
    $statement->bindValue('funcionario_id', $funcionario_id, PDO::PARAM_INT);
    $statement->execute();
    $pdo->commit();
} catch (\PDOException $ex) {
    $pdo->rollback();
    echo $ex->getMessage();
}    
