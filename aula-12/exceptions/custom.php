<?php

class MeuException extends Exception {
  public function __construct($message = ""){
    parent::__construct($message);
    file_put_contents('log.txt', (new DateTime())->format('d/m/Y') . $this->getTraceAsString()."<br>" ,
FILE_APPEND | LOCK_EX);
  }
}

function testar($x){
    if($x == 0){
        throw new MeuException('Zero não pode!');
    }
}

try{
    testar(0);
}catch(Exception $e){
    echo $e -> getMessage();
}
