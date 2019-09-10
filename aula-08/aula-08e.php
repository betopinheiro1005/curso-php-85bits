<?php

class Pessoa {
  public function digaOi(){
    return 'oi!';
  }
}

//com reflection
$reflector = new ReflectionClass('Pessoa');
$instancia = $reflector->newInstance();
var_dump($instancia);

echo "<br>";
$metodo = $reflector->getMethod('digaOi');
echo $metodo->invoke($instancia);
