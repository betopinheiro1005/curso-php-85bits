<?php

function soma($num1, &$num2){
  $num2 = 2 * $num2;
  return $num1 + $num2;
}

$num2 = 15;

$soma = soma(6, $num2);
print '$num1 + $num2 = ' . $soma . "<br>";

print '$num2 = ' . $num2;

?>
