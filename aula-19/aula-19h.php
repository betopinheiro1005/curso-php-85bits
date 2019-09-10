<?php

$queue = new SplQueue();

$queue[] = 1;
$queue[] = 2;
$queue[] = 3;

foreach ($queue as $item) {
    echo $item . "<br>";
}