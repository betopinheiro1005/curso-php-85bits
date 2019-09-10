<?php

declare(strict_types=1);

function soma(float $a, float $b) : int{
  return $a + $b;
}

$soma = soma(6.2, '8.6');
print $soma;

?>
