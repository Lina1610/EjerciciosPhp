<?php
/*iterable es cualquier valor que puede ser recorrido con un bucle foreach */
/*El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos */

function elementos(iterable $datos)
{
    foreach ($datos as $item) {
        echo $item . "\n";
    }
}

$lista = ["Manzana", "platano", "Mango"];
elementos($lista);
