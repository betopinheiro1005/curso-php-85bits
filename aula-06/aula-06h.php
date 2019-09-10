<?php

abstract class Pessoa{
  public $nome;
  abstract public function exibirNumeroDocumento();
}

class PessoaFisica extends Pessoa{
    public $cpf;

    public function exibirNumeroDocumento(){
        echo "<p>Número do CPF: " . $this->cpf . "</p>";
    }

}

class PessoaJuridica extends Pessoa{
  public $cnpj;

  public function exibirNumeroDocumento(){
        echo "<p>Número do CNPJ: " . $this->cnpj . "</p>";
  }

}

$pf = new PessoaFisica();
$pf->cpf = '455.625.250-46';
$pf->exibirNumeroDocumento();

$pj = new PessoaJuridica();
$pj->cnpj = '49.059.314/0001-59';
$pj->exibirNumeroDocumento();

?>
