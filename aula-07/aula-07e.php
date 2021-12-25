<?php

class Assunto {
  public $texto;
}

class Corpo {
  public $texto;
  public $formato;
}

class Destinatario {
  public $nome;
}

class Email {
  private $assunto;
  private $corpo;
  private $destinatario;

  public function __construct() {
    $this->assunto = new Assunto();
    $this->corpo = new Corpo();
    $this->destinatario = new Destinatario();
  }
}

$email1 = new Email();

echo "<pre>";
print_r($email1);
echo "</pre>";
