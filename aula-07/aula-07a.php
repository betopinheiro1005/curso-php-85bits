<?php

$pessoa = new class {

  public $nome = 'Maria';
  public $cpf = '754';

  public function getNome(){
    return strtoupper($this->nome);
  }
};

echo "<pre>";
print_r($pessoa);
echo "</pre>";

echo $pessoa->nome . "<br>";
echo $pessoa->cpf . "<br>";
echo $pessoa->getNome();
