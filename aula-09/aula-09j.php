<?php

$date1 = new DateTime('2018-08-11 05:02:00');
$date2 = new DateTime('2018-10-13 10:12:34');

$interval = $date1->diff($date2);

echo "Data 1: 11/08/2018 05:02:08 <br>";
echo "Data 2 13/10/2018 10:12:34 <br><br>";

echo "Diferença entre datas:<br>";
echo "Meses: {$interval->m}<br> Dias: {$interval->d}<br> Horas: {$interval->h}<br> Minutos:
{$interval->i}<br> Segundos: {$interval->s}";
