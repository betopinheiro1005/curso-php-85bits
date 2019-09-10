<?php

class Ator {
  public $nome;
  public $atuacoes = [];
}

class Atuacao {
  public $ator;
  public $filme;
  public $papel;

  public function __construct(Ator $ator, Filme $filme, string $papel){
    $this->ator = $ator;
    $this->filme = $filme;
    $this->papel = $papel;
  }
}

class Filme {
  public $titulo;
  public $atuacoes = [];
}

$ator1 = new Ator();
$ator1->nome = 'José da Silva';

$ator2 = new Ator();
$ator2->nome = 'Maria das Dores';

$filme1 = new Filme();
$filme1->titulo = 'Aventuras do barulho';

$filme1->atuacoes[] =
new Atuacao($ator1, $filme1, 'Protagonista');

$filme1->atuacoes[] =
new Atuacao($ator2, $filme1, 'Coadjuvante');

foreach($filme1->atuacoes as $atuacao){
  echo $atuacao->ator->nome . " fez o papel de " . $atuacao->papel . "<br>";
}
