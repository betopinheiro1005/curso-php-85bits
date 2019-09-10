<?php

class Pessoa {
  public $nome;
  public $veiculo;
}

class Veiculo{
  public $placa;
  public $modelo;
}

$p1 = new Pessoa();
$p1->nome = 'Maria';
$p1->veiculo = new Veiculo();
$p1->veiculo->placa = 'ABC123';
$p1->veiculo->modelo = 'Tesla X1';

echo "<pre>";
print_r($p1);
echo "</pre>";
