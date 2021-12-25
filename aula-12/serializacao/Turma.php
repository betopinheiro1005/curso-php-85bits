<?php

class Turma {
    public $nome;
    public $data;
    public $alunos;

    public function __construct(string
        $nome, \DateTime $data, array $alunos = []) {
            $this->nome = $nome;
            $this->data = $data;
            $this->alunos = $alunos;
    }
}