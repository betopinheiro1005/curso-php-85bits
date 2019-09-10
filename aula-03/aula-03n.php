<?php

$ano = "2019";

$x = function($txt) use($ano){
    echo "Hello $txt $ano";
};

$x("World");

?>
