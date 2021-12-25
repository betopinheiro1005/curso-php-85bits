<?php

function valores(...$x){
  echo "<p>" . array_sum($x) . "</p>";
}

valores(143,542);
valores(1,2,3,4);

?>
