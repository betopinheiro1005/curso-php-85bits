<?php

include_once "conexao.php";

try {
    $pdo->beginTransaction();
    $stmt1 = $pdo->prepare("UPDATE conta_corrente SET saldo = saldo - 200 WHERE cliente_id = 1");
    $stmt1->execute();
    sleep(25);
    $stmt2 = $pdo->prepare("UPDATE conta_corrente SET saldo = saldo + 200 WHERE cliente_id = 2");
    $stmt2->execute();
    $pdo->commit();
} catch (\PDOException $t) {
    $pdo->rollback();
    echo "mensagem:".$t->getMessage()."<br/>".
    "código:".$t->getCode();
}