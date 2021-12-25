<?php
class Pessoa {
    public $nome;
}

$storage = new SplObjectStorage();

$o1 = new Pessoa();
$o2 = new Pessoa();
$o3 = new Pessoa();
$o4 = new Pessoa();

$o1->nome = 'João';
$o2->nome = 'Maria';
$o3->nome = 'Thiago';
$o4->nome = 'Maria';

$storage->attach($o1);
$storage->attach($o2);
$storage->attach($o3);
$storage->attach($o1); //já existe, mesmo hash
$storage->attach($o4); //estados iguais, objetos diferentes

$storage->detach($o3); //removendo
//var_dump($storage[0]); //nulo !

echo "contém o1? ".var_export($storage->contains($o1), true)."</br>";

foreach($storage as $key => $o){
    echo "<pre>";
    print_r($o);//aqui funciona!
    echo "</pre>";
}