<?php

$maxHeap = new \SplMaxHeap();

$maxHeap->insert(30);
$maxHeap->insert(50);
$maxHeap->insert(10);
$maxHeap->insert(105);
$maxHeap->insert(99);
$maxHeap->insert(88);

echo "max:".$maxHeap->top();
echo "<br/><br/>";

foreach ($maxHeap as $value) {
    echo $value."<br/>";
}