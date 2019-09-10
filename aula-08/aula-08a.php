<?php

function meu_autoloader($class) {
  echo "Chamando a classe " . $class . "<br>";
  include_once("classes/" . $class . ".php");
}

spl_autoload_register('meu_autoloader');

$pessoa1 = new Pessoa();
var_dump($pessoa1);
echo "<br>";
$veiculo1 = new Veiculo();
var_dump($veiculo1);
