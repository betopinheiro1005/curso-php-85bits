<?php

$stack = new SplStack();

$stack[] = 1;
$stack[] = 2;
$stack[] = 3;

foreach ($stack as $item) {
    echo $item . "<br>";
}