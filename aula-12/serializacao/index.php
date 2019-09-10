<?php

include_once 'Turma.php';
include_once 'Aluno.php';

$turmas = [];

$aluno1 = new Aluno('José', 123);
$aluno2 = new Aluno('Maria', 456);
$aluno3 = new Aluno('Thiago', 789);

$turmas[] = new Turma('PHP',

new \DateTime('today'), [$aluno1, $aluno2]);
$turmas[] = new Turma('CakePHP',

new \DateTime('-2 days'), [$aluno1, $aluno2, $aluno3]);
$turmas[] = new Turma('MySQL',

new \DateTime('yesterday'), [$aluno1, $aluno3]);
$serializacao = serialize($turmas);

file_put_contents('dados.db', $serializacao);