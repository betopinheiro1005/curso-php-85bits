<?php

include_once "conexao.php";

$nome = "Geraldo";
$cpf = "1234";

try {
    $statement = $pdo->prepare("INSERT INTO funcionario (nome, cpf)" 
    . "VALUES (?,?)");
    $cadastro = $statement->execute([$nome, $cpf]);

    if($cadastro){
        echo "Funcionário cadastrado com sucesso!";
    }

} catch (\PDOException $t) {
    echo "mensagem:".$t->getMessage()."<br/>".
    "código:".$t->getCode();
}