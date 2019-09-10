<?php

$frutas = array("laranja", "banana", "maçã", "abacaxi", "uva", "melancia");

echo "<ul>";
foreach($frutas as $fruta){
  echo "<li>$fruta</li>";
}
echo "</ul>";

echo "<hr>";

$animais = ["cachorro", "gato", "cavalo", "macaco", "canguru", "elefante"];

echo "<ol>";
foreach($animais as $animal){
  echo "<li>$animal</li>";
}
echo "</ol>"

?>
