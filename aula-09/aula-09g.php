<?php

date_default_timezone_set('America/Sao_Paulo');

$dateTimeAgora = new DateTime();
echo $dateTimeAgora->format('d/m/Y H:i:s') . "<br>";

$dateTime = new DateTime('2016-12-31 12:03:00',
new DateTimeZone('America/Sao_Paulo'));
echo $dateTime->format('d/m/Y H:i:s') . "<br>";
