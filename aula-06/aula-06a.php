<?php

class Teste{

  public static $status = 'online';
  public $nome;

}

$t1 = new Teste();
$t1->nome="Miguel";
Teste::$status='offline';

echo "<p>" . $t1->nome . "</p>";
echo "<p>" . Teste::$status . "</p>";
echo "<p>" . $t1::$status . "</p>";

?>
