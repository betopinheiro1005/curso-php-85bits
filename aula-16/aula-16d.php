<?php

include_once "conexao.php";

$id = 18;

try {
    $stmt = $pdo->prepare("DELETE FROM funcionario WHERE id = :id");
    $delete = $stmt->execute(['id' => $id]);
    if($delete){
        echo "Funcionário excluído com sucesso!";
    }
} catch (\PDOException $t) {
    echo "mensagem:".$t->getMessage()."<br/>".
    "código:".$t->getCode();
}