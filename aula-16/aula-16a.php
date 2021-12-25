<?php
include_once 'conexao.php';

try{
    $pdo->query('SELECT * FROM nao_existe');
} catch (\PDOException $t) {
    echo "mensagem:".$t->getMessage()."<br/>". "código:".$t->getCode();
}