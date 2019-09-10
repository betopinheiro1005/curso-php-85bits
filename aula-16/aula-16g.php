<?php

include_once "conexao.php";

try {
    $pdo->beginTransaction();
    $sql = "INSERT INTO funcionario (nome, cpf) VALUES(:nome,:cpf)";
    $driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
    
    if($driver=='oci'){
        $sql .= 'RETURNING id INTO :last_id';
    }

    $statement = $pdo->prepare($sql);
    $statement->bindValue('nome','Jaqueline');
    $statement->bindValue('cpf','12269736044');    

    if($driver == 'oci'){
        $statement->bindParam('last_id', $funcionario_id, PDO::PARAM_INT, 8);
    }

    $statement->execute();

    if($driver != 'oci'){
        $funcionario_id = $pdo->lastInsertId();
    }

    $sql2 = "INSERT INTO habilitacao (numero, categoria, funcionario_id) VALUES(:numero,:categoria,:funcionario_id) ";
    $statement2 = $pdo->prepare($sql2);
    $statement2->execute(['95685512398','B',$funcionario_id]);

    $pdo->commit();
}catch (Exception $e){
    $pdo->rollback();
    throw $e;
}