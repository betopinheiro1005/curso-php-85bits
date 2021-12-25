<?php
include_once "conexao.php";

$statement = $pdo->query("SELECT id, nome FROM funcionario");
$dados = $statement->fetchAll(PDO::FETCH_KEY_PAIR);

echo "<select>";
    foreach($dados as $key => $dado){
        echo "<option value='$key'>$dado</option>";
    }
echo "</select>";