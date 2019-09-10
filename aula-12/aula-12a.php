<?php

try {
  $resultado = intdiv(10,0);
  echo "Resultado: ". $resultado . "<br>";
} catch(\Throwable $t) {
    echo $t->getMessage() . "<br>";
} finally {
    echo "Terminou o nosso try!";
}
