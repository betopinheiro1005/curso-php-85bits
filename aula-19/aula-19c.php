<?php

$dll = new \SplDoublyLinkedList();
$dll->unshift(200); //no início
imprimir($dll);
$dll->unshift(100); //no início
imprimir($dll);
$dll->push(34); //no fim
imprimir($dll);
$dll->push(35); //no fim
imprimir($dll);
$dll->add(2, 3); //posição específica
imprimir($dll);
$dll->unshift(670); //no início
imprimir($dll);
$dll->add(3, 450); //posição específica
imprimir($dll);
$dll->pop(); //remove o último
imprimir($dll);
$dll->shift(); //remove o primeiro
imprimir($dll);
$dll->offsetUnset(1); //remove de posição específica (2ª)
imprimir($dll);

function imprimir(\SplDoublyLinkedList &$dll) {
    $dll->rewind();
    $values = [];
    while ($dll->valid()) {
        $values[] = $dll->current();
        $dll->next();
    }
    echo "[ " . implode(' , ', $values) . " ] </br>";
}