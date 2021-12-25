<?php

// include 'conexao_oracle.php';
include 'conexao.php';

$driver = $pdo->getAttribute(\PDO::ATTR_DRIVER_NAME);
$table = 'editora';
$colunas = 'COLUMN_NAME, IS_NULLABLE, DATA_TYPE, CHARACTER_MAXIMUM_LENGTH';
$from = 'information_schema.COLUMNS';

if($driver == 'oci'){
    $table = strtoupper($table);
    $from = 'all_tab_columns';
    $colunas = 'column_name, nullable as IS_NULLABLE, data_type, data_length as CHARACTER_MAXIMUM_LENGTH';
}

$query = "SELECT $colunas " . " FROM $from WHERE table_name = ?";
$statement = $pdo->prepare($query);
$statement->execute([$table]);
$schema = $statement->fetchAll();

echo "<table>";
echo "<tr><th>name</th><th>is null?</th><th>type</th><th>size</th></tr>";

foreach($schema as $coluna_schema){
    $coluna_schema = array_change_key_case($coluna_schema, CASE_UPPER);

    echo "<tr>";
    echo "<td>{$coluna_schema['COLUMN_NAME']}</td>";
    echo "<td>{$coluna_schema['IS_NULLABLE']}</td>";
    echo "<td>{$coluna_schema['DATA_TYPE']}</td>";
    echo "<td>{$coluna_schema['CHARACTER_MAXIMUM_LENGTH']}</td>";
    echo "</tr>";
}

echo "</table>";
