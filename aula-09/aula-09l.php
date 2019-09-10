<?php

class Veiculo {
  public string $placa;
  public string $modelo;
}

class Pessoa {
  public string $nome;
  public Veiculo $veiculo;
}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Maria da Silva";

$veiculo1 = new Veiculo();
$veiculo1->placa = "ABC 123";

$pessoa1->veiculo = 1; //erro !
$pessoa1->veiculo = $veiculo;
