<?php

final class Pai{

  public function fazAlgo(){
      echo "Oi";
  }

}

class Filho extends Pai{

}

$filho = new Filho();
echo "<p>" . $filho->fazAlgo() . "</p>";

?>
