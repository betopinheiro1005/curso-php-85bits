<?php

class Pessoa {

    public $nome;
    public $sobrenome;

    public function nomeCompleto(){
    	echo "Nome: " . $this->nome." ".$this->sobrenome . "<br>";
    }

}

$pessoa1 = new Pessoa();
$pessoa1->nome = "Carlos";
$pessoa1->sobrenome = "Silva";

$pessoa1->nomeCompleto();

$pessoa2 = new Pessoa();
$pessoa2->nome = "Regina";
$pessoa2->sobrenome = "Santos";

$pessoa2->nomeCompleto();
