<?php

class Teste {
  private $propriedade = 'ola';
  private function dizSegredo(){
    echo $this->propriedade.'! 1234';
  }
}

$class = new ReflectionClass("Teste");
$property = $class->getProperty("propriedade");
$property->setAccessible(true);

$teste1 = new Teste();
//echo $teste1->propriedade; // Não funciona aqui
echo $property->getValue($teste1) . "<br>";
$property->setValue($teste1, 'legal');

$method = new ReflectionMethod("Teste", 'dizSegredo');
$method->setAccessible(true);
echo $method->invoke($teste1) . "<br>";
