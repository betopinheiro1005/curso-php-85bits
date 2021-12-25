<?php

class Aluno {
  public $nome;
  protected $endereco;
  private $telefone;
}

$aluno1 = new Aluno();
$reflect = new ReflectionClass($aluno1);
$props = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

foreach ($props as $prop) {
  print $prop->getName() . "<br>";
}

echo "<pre>";
var_dump($props);
echo "</pre>";
