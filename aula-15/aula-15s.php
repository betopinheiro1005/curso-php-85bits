<?php
include_once 'conexao_postgres.php'; //sqlserver, oracle e postgres
$query = "select * from pedido order by id";
$statement = $pdo->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
$statement->execute();
$pedido = $statement->fetch(PDO::FETCH_LAZY, PDO::FETCH_ORI_FIRST);
print "Primeiro pedido (id:{$pedido['id']}) ocorreu em : {$pedido['data']}<br/>";
$pedido = $statement->fetch(PDO::FETCH_LAZY, PDO::FETCH_ORI_NEXT);
print "Próximo pedido (id:{$pedido['id']}) ocorreu em : {$pedido['data']}<br/>";
$pedido = $statement->fetch(PDO::FETCH_LAZY, PDO::FETCH_ORI_LAST);
print "Último pedido (id:{$pedido['id']}) ocorreu em: {$pedido['data']}<br/>";
$pedido = $statement->fetch(PDO::FETCH_LAZY, PDO::FETCH_ORI_PRIOR);
print "Penúltimo pedido (id:{$pedido['id']}) ocorreu em: {$pedido['data']}<br/>";
$pedido = $statement->fetch(PDO::FETCH_LAZY, PDO::FETCH_ORI_ABS, 3);
print "Terceiro pedido (id:{$pedido['id']}) em: {$pedido['data']}<br/>";