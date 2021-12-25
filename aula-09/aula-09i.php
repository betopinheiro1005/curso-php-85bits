<?php

echo "<p>Data: 31/01/2018</p>";

// Adicionar 1 dia

$dateTime = new DateTime('2018-01-31');
$dateTime->modify('+1 day');

echo "Adicionar 1 dia<br>";
echo $dateTime->format('d/m/Y');

echo "<br><br><hr>";

// Adicionar 10 dias úteis

echo "<p>Data: 04/09/2018</p>";

echo "Adicionar 10 dias úteis<br>";
$dateTime = new DateTime();
$dateTime->modify('+10 weekdays');
echo $dateTime->format('d/m/Y');

echo "<br><br>";

// Segunda-feira dessa semana

echo "Segunda-feira dessa semana<br>";
$dateTime = new DateTime();
$dateTime->modify('monday this week');
echo $dateTime->format('d/m/Y');

echo "<br><br>";

// Adicionar 1 mês - 3 dias

echo "Adicionar 1 mês - 3 dias<br>";
$dateTime = new DateTime();
$dateTime->modify('+1 month -3 days');
echo $dateTime->format('d/m/Y');
