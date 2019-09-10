<?php

set_error_handler("manipuladorCustomizadoDeErros");

function manipuladorCustomizadoDeErros
    ($severity, $mensagem, $arquivo, $linha) {
        if (error_reporting() & $severity) {
            throw new Exception($mensagem, 0);
        }
    }

    $array = ['maria','josé'];

    try {
        $b = $array[2];
    } catch (Exception $e) {
        echo "Posição não encontrada !";
    } finally {

    restore_error_handler();
}