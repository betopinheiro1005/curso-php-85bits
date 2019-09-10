<?php

function meu_autoloader($class) {
  include_once $class . '.php';
}

spl_autoload_register('meu_autoloader');

use modelo\fruta\Manga as FrutaManga;
use modelo\literatura\{Conto, Manga, Ficcao};

$manga1 = new Manga();
$manga2 = new FrutaManga();
$ficcao1 = new Ficcao();

echo "<pre>";
print_r($manga1);
echo "</pre>";

echo "<pre>";
print_r($manga2);
echo "</pre>";

echo "<pre>";
print_r($ficcao1);
echo "</pre>";
