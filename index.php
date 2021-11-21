<?php

require_once 'Speedometer.php';

echo 'Le résultat de 10km en Miles est de ' . round(Speedometer::retrieveMiles(10));

echo 'Le résultat de 10 Miles en Km est de ' . round(Speedometer::retrieveKm(10));