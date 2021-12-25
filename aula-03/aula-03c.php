<?php

function imprimeNome($nome, $sobrenome = "Batista"){
  echo "<p>" . $nome . " " . $sobrenome . "</p>";
}

imprimeNome('Ricardo');
imprimeNome('Ricardo', 'Oliveira');

?>
