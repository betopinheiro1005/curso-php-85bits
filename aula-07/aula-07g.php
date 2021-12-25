<?php

abstract class Motor {}

class MotorV8 extends Motor {
}

class Carro {
  private $motor;
  public function __construct(Motor $motor) {
    $this->motor = $motor;
  }
}

$motorV8 = new MotorV8();
$carro1 = new Carro($motorV8);
unset($carro1);

echo "<pre>";
print_r($motorV8);
echo "</pre>";
