<?php

$diretorio = "anexos".DIRECTORY_SEPARATOR;

foreach($_FILES as $arquivo){
  $nome = $arquivo['name'];
  $conteudo = file_get_contents($arquivo['tmp_name']);
  //salvando no disco
  file_put_contents($diretorio.$nome, $conteudo);
}
