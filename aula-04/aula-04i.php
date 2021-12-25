<?php

$texto = "O trabalho dignifica o homem";

$array = explode(" ", $texto);

var_dump($array);

echo "<br><hr>";

foreach($array as $palavra){
    echo $palavra . "<br>";
}

?>
