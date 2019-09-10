<?php

class Pessoa {
  public $nome = 'Maria da Silva';
  private $cpf = '123456';
  protected $idade = 30;

  function iterar() {
    foreach ($this as $key => $value) {
      print "$key => $value<br>";
    }
  }
}

$pessoa = new Pessoa();

//Aqui só é possível iterar os atributos públicos
foreach($pessoa as $key => $value) {
  print "$key => $value<br>";
}
echo "<br>";
//no método usando o $this é possível iterar todos os valores
$pessoa->iterar();
