<?php

$frutas = ["laranja" => 8.25, "goiaba" => 3.55, "limão" => 3.15, "abacate" => 4.75];

if(array_key_exists("abacate", $frutas)){
  echo "Tem abacate!";
} else {
  echo "Não tem abacate!";
}

?>
