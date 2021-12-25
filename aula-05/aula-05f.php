<?php

class Pessoa {
  public $nome;

  public function exibirNome(){
    echo "Nome: " . $this->nome;
  }

}

class PessoaFisica extends Pessoa {
    public $cpf;

    public function exibirNome(){
      echo parent::exibirNome() . " - CPF: " . $this->cpf . " <br>";
    }
}

class PessoaJuridica extends Pessoa {
  public $cnpj;

    public function exibirNome(){
      echo parent::exibirNome() . " - CNPJ: " . $this->cnpj . " <br>";
    }

}

$pf1 = new PessoaFisica();
$pf1->nome = "Gilberto";
$pf1->cpf = "123";
$pf1->exibirNome();

$pj1 = new PessoaJuridica();
$pj1->nome = "Lucas & Associados Ltda.";
$pj1->cnpj = "4567";
$pj1->exibirNome();

?>
