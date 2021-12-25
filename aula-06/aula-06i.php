<?php

interface MinhaInterface {
  public function fazAlgo();
  public function fazOutraCoisa();
}

class Teste implements MinhaInterface{
  // erro: é obrigatório implementar o método Formatador
  // obs.: exceção se a classe Html for abstrata

  public function fazAlgo(){
      echo "<p>Faz algo</p>";
  }

  public function fazOutraCoisa(){
    echo "<p>Faz outra coisa</p>";
  }

}

$teste = new Teste();
$teste->fazAlgo();
$teste->fazOutraCoisa();

?>
