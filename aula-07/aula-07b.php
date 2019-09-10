<?php

$pessoa = new class{
  public $nome = 'Fulano';
  public function oi(){
    return "Oi {$this->nome}!";
  }
};

echo $pessoa->oi() . "<br>";
$p1 = new $pessoa();
$p1->nome = 'Maria';
echo $p1->oi() . "<br>";
