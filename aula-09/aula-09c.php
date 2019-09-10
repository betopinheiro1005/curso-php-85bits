<?php

function meuGenerator() {
  echo "Um"."<br>";
  yield 1;
  echo "Dois"."<br>";
  yield 2;
  echo "Três"."<br>";
  yield 3;
  }

$iterator = meuGenerator();

echo "<pre>";
print_r($iterator);
echo "</pre>";

$value = $iterator->current();

echo $value . "<br>";

$value = $iterator->next();
$value = $iterator->next();
