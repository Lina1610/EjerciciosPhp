<?php

$indexado = ["Lina", 22, "Salomé"];

$asociativo = [
    "Hola" => "Mundo",
    "Suma" => "Operador_suma",
    "Resta" => "Operados_resta"
];

foreach ($asociativo as $k => $name) {
    echo $k . " " . $name . ";";
}
/*Recorre todos los valores */
/*Aqui igual se puede hacer con asociativos nos mostrata su clave y valor 
dentro del foreach le indicamos la estructura */