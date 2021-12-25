<?php

function meu_autoloader($class) {
  include_once $class . '.php';
}

spl_autoload_register('meu_autoloader');

use modelo\fruta\Manga as FrutaManga;
use modelo\literatura\Manga;

$manga1 = new Manga();
$manga2 = new FrutaManga();

echo "<pre>";
print_r($manga1);
echo "</pre>";

echo "<pre>";
print_r($manga2);
echo "</pre>";
