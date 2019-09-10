<?php

$dll = new \SplDoublyLinkedList();

$dll->push("laranja");
$dll->push("banana");
$dll->push("limão");
$dll->push("maçã");
$dll->push("uva");
$dll->push("abacaxi");

echo "Cabeça: ". $dll->bottom(). "<br/>";
echo "Cauda: ". $dll->top(). "<br/>";

$prev = null;
$dll->rewind(); //rebobinando

while ($dll->valid()) {
    $current = $dll->current();
    echo 'Anterior: '.$prev, "<br/>";
    echo 'Atual: '.$current, "<br/>";
    $prev = $current;
    $dll->next();
    $next = $dll->current();
    echo 'Próximo: '.$next. "<br/>";
    echo "<br/>";
}