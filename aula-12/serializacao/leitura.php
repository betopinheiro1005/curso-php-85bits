<?php

include 'Turma.php';
include 'Aluno.php';

$serializacao = file_get_contents('dados.db');
$turmas = unserialize($serializacao);

echo "<table border>";
foreach ($turmas as $turma) {
    echo "<tr>";
        echo "<td> {$turma->nome} </td>";
        echo "<td> {$turma->data->format('d/m/Y')} </td>";
        echo "<td>". implode(", ", array_column($turma->alunos, 'nome'))."</td>";
    echo "</tr>";
}
echo "</table>";