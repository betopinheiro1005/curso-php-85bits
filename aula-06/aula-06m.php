<?php

trait Telefone {
  public function ligar() {
    echo "<p>alo…</p>";
  }
}

trait Camera {
  public function filmar() {
    echo "<p>gravando…</p>";
  }
}

class Smartphone {
  use Telefone, Camera;
  public function videoChamada() {
    echo "<hr>";
    echo $this->filmar() . $this->ligar();
  }
}

$o = new Smartphone();
$o->ligar();
$o->filmar();
$o->videoChamada();
