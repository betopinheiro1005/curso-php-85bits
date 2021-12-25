<?php

class Funcionario {
    public $id;
    public $nome;
    public $habilitacao;

    public function __construct() {
        $this->habilitacao = new Habilitacao();
    }

    public function __set($name, $value) {
        if (array_key_exists($name, get_object_vars($this->habilitacao))) {
            $this->habilitacao->$name = $value;
        } else {
            $this->$name = $value;
        }
   }
}