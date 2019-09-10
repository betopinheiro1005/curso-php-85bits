<?php

$fixed = new SplFixedArray(3);
$fixed[0] = 'laranja';
$fixed[1] = 'maçã';
$fixed[2] = 'banana';

foreach ($fixed as $item) {
    echo $item . "<br>";
}

echo "<hr>";

echo "<p>Diminuindo o array</p>";

$fixed->setSize(2); //diminuindo o array

foreach ($fixed as $item) {
    echo $item . "<br>";
}