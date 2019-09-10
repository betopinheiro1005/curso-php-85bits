<?php

//convertendo array para objeto
$array = ['nome'=>'José', 'idade'=>34];
$objeto = (object) $array;

echo "<pre>";
print_r($objeto);
echo "</pre>";

//convertendo json para objeto
$json = '{"nome":"Maria", "idade":45}';
$objeto2 = json_decode($json);

echo "<pre>";
print_r($objeto2);
echo "</pre>";

//criando um objeto genérico
$objeto3 = new StdClass();
$objeto3->nome = 'Lucas';
$objeto3->vivo = true;

echo "<pre>";
print_r($objeto3);
echo "</pre>";
