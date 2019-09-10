<?php

$hoje = new DateTime('today');
$ontem = new DateTime('yesterday');

echo "hoje > ontem.<br>";
echo "<pre>";
var_dump($hoje > $ontem);
echo "</pre>";
echo "<br>";

echo "hoje < ontem.<br>";
echo "<pre>";
var_dump($hoje < $ontem);
echo "</pre>";
echo "<br>";

echo "hoje == ontem.<br>";
echo "<pre>";
var_dump($hoje == $ontem);
echo "</pre>";
