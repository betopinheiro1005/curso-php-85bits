<?php

class Matematica{

  const PI = 3.14;

  function valorDePi(){
      echo self::PI;
  }

}

echo "<p>" . Matematica::PI . "</p>";
echo "<p>" . Matematica::valorDePi() . "</p>";
$mat = new Matematica();
echo "<p>" . $mat->valorDePi() . "</p>";

?>
