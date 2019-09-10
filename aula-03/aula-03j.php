<?php

declare(strict_types=1);

function soma(float $a, float $b, ?float $c) : float{
  return $a + $b;
}

$soma = soma(6.2, 8.6, null);
print $soma;

?>
