<?php

$prQueue = new SplPriorityQueue();

$prQueue->insert('A',1);
$prQueue->insert('B',9);
$prQueue->insert('C',7);
$prQueue->insert('D',5);
$prQueue->insert('E',2);
$prQueue->insert('F',4);

foreach ($prQueue as $item) {
    echo $item . "<br/>";
}