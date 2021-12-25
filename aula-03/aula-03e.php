<?php

function valores($a, $b, $c){
  echo $a + $b + $c;
}

$args = array(43, 97);
valores(10, ...$args);

?>
