<?php

//FIFO
$fifo = new \SplDoublyLinkedList();
$fifo->setIteratorMode(\SplDoublyLinkedList::IT_MODE_FIFO);
$fifo->push("laranja");
$fifo->push("banana");
$fifo->push("limão");
$fifo->push("maçã");
$fifo->push("uva");
$fifo->push("abacaxi");

foreach ($fifo as $value) {
    echo $value."<br/>";
}