<?php

class Pai{

  final public function fazAlgo(){
      echo "Oi";
  }

}

class Filho extends Pai{

  final public function fazAlgo(){
      echo "Olá";
  }

}

$filho = new Filho();
echo "<p>" . $filho->fazAlgo() . "</p>";

?>
