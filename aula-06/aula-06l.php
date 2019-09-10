<?php

trait MinhaTrait{
    public function oi(){
      echo "<p>Oi</p>";
    }
}

class Teste {
  use MinhaTrait;
}

$teste = new Teste();
$teste->oi();

?>
