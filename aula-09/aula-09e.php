<?php

class Fibonacci implements Iterator {
  private $anterior = 1;
  private $atual = 0;
  private $key = 0;

  public function __construct (int $max = 100) {
    $this->max = $max;
  }

  public function current() {
    return $this->atual;
  }

  public function key() {
    return $this->key;
  }

  public function next() {
    $novo_atual = $this->atual;
    $this->atual += $this->anterior;
    $this->anterior = $novo_atual;
    $this->key++;
  }

  public function rewind() {
    $this->anterior = 1;
    $this->atual = 0;
    $this->key = 0;
  }

  public function valid() {
    if($this->atual > $this->max)
      return false;
      return true;
    }
}


$seq = new Fibonacci();

$array_fibonnaci = iterator_to_array($seq);

echo "<pre>";
print_r($array_fibonnaci);
echo "</pre>";
