<?php

function pessoa_oo() {
  return new class {
    public $nome = 'Maria';
    public $cpf = '754';
    public function getNome(){
      return strtoupper($this->nome);
    }
  };
}

$pessoa = pessoa_oo();
echo $pessoa->nome . "<br>";
echo $pessoa->cpf. "<br>";
echo $pessoa->getNome();
