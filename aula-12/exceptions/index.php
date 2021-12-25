<?php
class MeuException extends Exception {
    public function __construct($message = null, $code = 0){
        parent::__construct($message, $code);
        file_put_contents('/tmp/log.txt',
            $this->getTraceAsString().PHP_EOL ,
            FILE_APPEND | LOCK_EX);
    }
}

function legal($x){
    if($x == 0){
        throw new MeuException();
    }
}

try{
    legal(0);
}catch(Exception $e){
    print('erro');
}
