<?php

require "Modelo\Fruta\Manga.php";

use Modelo\Fruta\Manga;

$manga2 = new Manga();

echo "Manga - Vitaminas: ";
foreach($manga2->vitaminas as $vitamina){
  echo $vitamina . " | ";
}
