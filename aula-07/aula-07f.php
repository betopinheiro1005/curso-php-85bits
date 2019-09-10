<?php

class Email {
  private $assunto;
  private $corpo;
  private $destinatario;

  public function __construct() {
    $this->assunto = new class {
      public $texto;
    };
    $this->corpo = new class {
      public $texto;
      public $formato;
    };
    $this->destinatario = new class {
      public $nome;
    };
  }

  public function setAssunto($texto){
    $this->assunto->texto = $texto;
  }

  public function getAssunto(){
    return $this->assunto->texto;
  }
  //implementar os próximos getters & setters
}

$email = new Email();
$email->setAssunto('Curso de PHP');
echo "Assunto: " . $email->getAssunto();
