<?php

include_once "conexao.php";

try {
    $stmt1 = $pdo->prepare("UPDATE conta_corrente SET saldo = saldo - 200 WHERE cliente_id = 1");
    $stmt1->execute();
    sleep(25);
    $stmt2 = $pdo->prepare("UPDATE conta_corrente SET saldo = saldo + 200 WHERE cliente_id = 2");
    $stmt2->execute();
} catch (\PDOException $t) {
    echo "mensagem:".$t->getMessage()."<br/>".
    "código:".$t->getCode();
}