<?php

try {
  $resultado = intdiv(10,0);
  echo "Resultado: ". $resultado . "<br>";
} catch(DivisionByZeroError | TypeError $t) {
    echo "Erro de divisão por zero ou erro de tipagem!<br>";
} finally {
    echo "Terminou o nosso try!";
}
