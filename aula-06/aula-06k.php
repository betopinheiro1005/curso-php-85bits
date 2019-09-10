<?php

Interface sepultavel{
    public function CalcularValorDoCaixao(float $valor) : float;
}

class AnimalDomestico{}

class Felino extends AnimalDomestico implements sepultavel{
  public $peso;
  public function CalcularValorDoCaixao(float $valor) : float {
    return $valor * ($this->peso * 0.3);
  }
}

class HomoSapiens{}

class Pessoa extends HomoSapiens implements sepultavel{
    public $altura;
    public $peso;
    public $circunferenciaAbdominal;
    public function CalcularValorDoCaixao(float $valor) : float {
      return $valor * ($this->altura * $this->peso) / 2 + $this->circunferenciaAbdominal;
    }
}

class Sepultamento{
  public $cotacao = 4.05;
  public function enterrar(Sepultavel $sepultavel) : float{
    return $sepultavel->CalcularValorDoCaixao($this->cotacao);
  }
}

$gato = new Felino();
$gato->peso = 3.4;
$s = new Sepultamento();
echo "<p>" . $s->enterrar($gato) . "</p>";

$p1 = new Pessoa();
$p1->altura = 1.70;
$p1->peso = 68;
$p1->circunferenciaAbdominal = 100;
$s2 = new Sepultamento();
echo "<p>" . $s2->enterrar($p1) . "</p>";




?>
