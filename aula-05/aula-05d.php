<?php

class Pessoa {
  public $nome;

  public function exibirNome(){
    echo "<p>Nome: " . $this->nome . "</p>";
  }

}

class PessoaFisica extends Pessoa {
    public $cpf;
}

class PessoaJuridica extends Pessoa {
  public $cnpj;
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
