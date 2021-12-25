<?php

function escolhaMcOferta (int $opcao) : ?string {

  $ofertas = ['bic mac', 'mc cheddar',
'quarteirão', 'mc fish', 'mc chicken'];

  if (!in_array($opcao, range(1,5))) {
    throw new OutOfRangeException("Oferta inválida!");
  }
  return $ofertas[--$opcao];
}

try {
  echo escolhaMcOferta(6);
} catch (\Throwable $t) {
  echo "Ocorreu um erro: " . $t->getMessage();
}
