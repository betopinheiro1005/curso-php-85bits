<?php

include 'conexao.php';

class Log implements \Serializable {
    public $id;
    public $dados;
    public function serialize() {
        return serialize((array) $this);
    }

    public function unserialize($serialized): void {
        foreach (unserialize($serialized) as $p => $v) {
            $this->{$p} = $v;
        }
    }
}

$statement = $pdo->query('SELECT dados FROM log');
$statement->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_SERIALIZE, Log::class);
$logs = $statement->fetchAll();

foreach ($logs as $log) {
    echo "id: $log->id | ";
    echo "dados: " . var_export($log->dados, true);
    echo "<br/>";
}