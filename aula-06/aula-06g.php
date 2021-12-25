<?php

abstract class Pessoa{
  public $nome;
}

class PessoaFisica extends Pessoa{
    public $cpf;
}

class PessoaJuridica extends Pessoa{
  public $cnpj;
}

$pf = new PessoaFisica();
$pf->nome = "Cícero";
echo "<p>" . $pf->nome . "</p>";

$pj = new PessoaJuridica();
$pj->nome = "Wallita";
echo "<p>" . $pj->nome . "</p>";

$pessoa = new Pessoa();
$pessoa->nome = "Alberto";
echo "<p>" . $pessoa->nome . "</p>";

?>
