<?php

class Aluno {
    public $nome;
    public $matricula;
    public function __construct(string $nome, int $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
}