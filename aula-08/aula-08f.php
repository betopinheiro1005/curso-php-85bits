<?php

/**
* Esta é uma classe de exemplo
*/

class Exemplo {
  /**
  * Esta é uma função de exemplo
  */
  public function fazNada(){}
}

$reflector = new ReflectionClass(Exemplo::class);
echo $reflector->getDocComment() . "<br>";
echo $reflector->getMethod('fazNada')->getDocComment();
