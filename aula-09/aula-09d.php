<?php

function contar10() {
  yield 1;
  yield 2;
  yield from [3, 4];
  yield from new ArrayIterator([5, 6]);
  yield from sete_oito();
  yield 9;
  yield 10;
}

function sete_oito() {
  yield 7;
  yield from oito();
}

function oito() {
  yield 8;
}

foreach (contar10() as $num) {
  echo "$num ";
}
