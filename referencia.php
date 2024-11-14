<?php

function referencia(&$parametro)
{
    $parametro = "Nuevo valor";
}
$nombre = "Lina Escobar";
print "{$nombre}\n";

referencia($nombre);
print "{$nombre}\n";
