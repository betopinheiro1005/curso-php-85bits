<?php

class MesesDoAno extends SplEnum {
    const __default = self::Janeiro;
    const Janeiro = 1; const Fevereiro = 2;
    const Marco = 3; const Abril = 4;
    const Maio = 5; const Junho = 6;
    const Julho = 7; const Agosto = 8;
    const Setembro = 9; const Outubro = 10;
    const Novembro = 11; const Dezembro = 12;
}

echo new MesesDoAno(MesesDoAno::Junho) . "<br/>";
echo MesesDoAno::Novembro . "<br/>";

echo "<pre>";
print_r((new MesesDoAno())->getConstList(true));
echo "</pre>";

try {
    new MesesDoAno(13);
} catch (UnexpectedValueException $uve) {
    echo $uve->getMessage() . "<br>";
}