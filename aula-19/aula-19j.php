<?php

$minHeap = new \SplMinHeap();

$minHeap->insert(30);
$minHeap->insert(50);
$minHeap->insert(10);
$minHeap->insert(105);
$minHeap->insert(99);
$minHeap->insert(88);

echo "mínimo:".$minHeap->top();
echo "<br/><br/>";

foreach ($minHeap as $value) {
    echo $value."<br/>";
}