<?php

class Livro {
  public $titulo;
  public $edicao;
}

class Editora {
  public $nome;
  public $website;
  public $publicacoes = [];
}

$livro1 = new Livro();
$livro1->titulo = 'Aventuras do PHP';
$livro2 = new Livro();
$livro2->titulo = 'A vida';

$editora1 = new Editora();
$editora1->nome = 'Editora XPTO';
$editora1->publicacoes[] = $livro1;
$editora1->publicacoes[] = $livro2;

foreach($editora1->publicacoes as $livro){
  echo $livro->titulo . "<br>";
}
