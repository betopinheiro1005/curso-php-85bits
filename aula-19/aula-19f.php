<?php

$dll = new \SplDoublyLinkedList();
$dll->setIteratorMode(\SplDoublyLinkedList::IT_MODE_DELETE);

$dll->push("laranja");
$dll->push("banana");
$dll->push("limão");
$dll->push("maçã");
$dll->push("uva");
$dll->push("abacaxi");

foreach ($dll as $value) {
    echo $value."<br/>";
    echo "Tamanho atual: ".$dll->count()."<br><br>";
}

echo "<hr>";

echo "Tamanho atual: ".$dll->count()."<br>";