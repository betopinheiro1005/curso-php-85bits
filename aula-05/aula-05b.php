<?php

class Pessoa {

    public $nome;
    public $sobrenome;

    public function __construct($nome, $sobrenome){
      $this->nome = $nome;
      $this->sobrenome = $sobrenome;
    }

    public function nomeCompleto(){
    	echo "Nome: " . $this->nome." ".$this->sobrenome . "<br>";
    }

}

$pessoa1 = new Pessoa("Francisco", "Gouveia");
$pessoa1->nomeCompleto();

$pessoa2 = new Pessoa("Rita", "Pereira");
$pessoa2->nomeCompleto();
