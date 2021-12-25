<?php

interface Interface1 {
  public function fazAlgo();
}

interface Interface2 {
  public function fazOutraCoisa();
}

interface Interface3 extends Interface1, Interface2 {

}

class Teste implements Interface3{
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
