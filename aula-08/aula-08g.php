<?php

require "Modelo\Fruta\Manga.php";
require "Modelo\Literatura\Manga.php";

$manga1 = new Modelo\Literatura\Manga();
$manga1->autor = "Roberto";
echo "Autor: " . $manga1->autor . "<br>";

$manga2 = new Modelo\Fruta\Manga();

echo "Manga - Vitaminas: ";
foreach($manga2->vitaminas as $vitamina){
  echo $vitamina . " | ";
}
