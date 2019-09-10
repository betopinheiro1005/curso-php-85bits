<?php

class Pessoa {
  public $texto1;
  private $texto2;
  protected $texto3;

  public function setPrivado($texto2){
      $this->texto2 = $texto2;
  }

  public function getPrivado(){
      return $this->texto2;
  }

  public function setProtegido($texto3){
      $this->texto3 = $texto3;
  }

  public function getProtegido(){
      return $this->texto3;
  }

  private function segredo(){
    return "<p>Segredo revelado!</p>";
  }

  public function revelarSegredo(){
    return $this->segredo();
  }

}

class PessoaFisica extends Pessoa {

}

$pessoa = new Pessoa();
$pessoa->texto1 = "texto da variável pública";
$pessoa->setPrivado("texto da variável privada");
$pessoa->setProtegido("texto da variável protegida");

echo "<p>" . $pessoa->texto1 . "</p>";
echo "<p>" . $pessoa->getPrivado() . "</p>";
echo $pessoa->revelarSegredo();

$pf = new PessoaFisica();
echo "<p>" . $pessoa->getProtegido() . "</p>";

?>
