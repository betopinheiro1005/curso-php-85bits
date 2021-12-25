<?php

try {
  $resultado = intdiv(10,0);
  echo "Resultado: ". $resultado . "<br>";
} catch(DivisionByZeroError $t) {
    echo "Erro de divisão por zero!<br>";
} catch(TypeError $t) {
    echo "Erro de tipagem!<br>";
} finally {
    echo "Terminou o nosso try!";
}
