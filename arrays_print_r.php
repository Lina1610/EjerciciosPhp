<?php

$texto = "Cortinas";
$numero = 20; 
$numerox = "10";
$arreglo = array("Lina", "Marcela", "Escobar");
$arreglo_asociativo = array("Nombre " => "Lina", "Edad "=> 23);
$booleano = false;

$arreglo_multidimensional =  [
    [
        "perro", "perrito"
    ],
    [
        "Gato", "Gatito"
    ],
    [
        "Pajado"
    ]
    ];

print_r($arreglo_multidimensional);

/*La diferencia entre varm_dump y print_r es que el print_r solo nos muestra el contenido
el otro lo muestra mas detallado tipo de texto etc
*/

/*La ventaja de print_r en los valores boolenos muestra que e slo que contiene 
realmente ejemplo en el caso de true muestra el numero 1 en el caso de false
no muestra nada solo queda en blanco */

/* Arreglo multidimensional un arreglo dentro de otros arreglos*/