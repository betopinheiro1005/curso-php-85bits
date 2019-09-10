<?php

$dateTime = new DateTime('2016-12-31');
echo $dateTime->format('Y-m-d H:i:s') . "<br>";

$dateTimeAgora = new DateTime();
echo $dateTimeAgora->format('Y-m-d H:i:s');
