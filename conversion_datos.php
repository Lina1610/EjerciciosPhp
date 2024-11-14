<?php

$text = "Apple";
$elemento1 = (int) $text;
$elemento2 = (bool) $text;

echo gettype($elemento1);
echo "\n";
echo gettype($elemento2);
/*gettype — Obtener el tipo de una variable */