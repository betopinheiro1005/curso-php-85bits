<?php

require "Modelo\Fruta\Manga.php";
require "Modelo\Literatura\Manga.php";

use Modelo\Fruta\Manga as FrutaManga;
use Modelo\Literatura\Manga;

$manga1 = new Manga();
$manga2 = new FrutaManga();

echo "<pre>";
print_r($manga2);
echo "</pre>";
