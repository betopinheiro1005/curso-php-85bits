<?php

include_once "conexao.php";

$id = 10;


try {
    $stmt = $pdo->prepare("UPDATE livro SET preco = preco + 1, edicao = 2 WHERE id = :id");
    $update = $stmt->execute(["id" => $id]);
    if($update){
        echo "Livro atualizado com sucesso";
    }

} catch (\PDOException $t) {
    echo "mensagem:".$t->getMessage()."<br/>".
    "código:".$t->getCode();
}