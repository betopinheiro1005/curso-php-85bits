<?php

$frutas = ["laranja", "caqui", "goiaba", "limão", "pera", "abacate", "maçã", "jaca"];

echo "<h3>Ordem Crescente</h3>";

sort($frutas);

for($i = 0; $i < count($frutas); $i++){
  echo $frutas[$i] . "<br>";
}

echo "<br>";

echo "<h3>Ordem decrescente</h3>";

rsort($frutas);

for($i = 0; $i < count($frutas); $i++){
  echo $frutas[$i] . "<br>";
}


?>
