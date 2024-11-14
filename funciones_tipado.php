<?php

declare(strict_types=1);
/*Esta declare nos indica que se debe ingresar estrictamente el valor entero 
ya que en la funcion le hemos dicho que es entero
si vamos a poner entero y uno flotamte gracias al strict este nos va a indicar un error de que debe de ser entero */

function sumaEnteros(int $numero1, int $numero2): int | float/*Al poner el int stamos indicando el tipo de dato que esperamos recibir */
{
    return $numero1 + $numero2;
}

$resultado = sumaEnteros(5, 7);
print $resultado;

/*En la funcion donde tiene los parametros le indicamos el tipo de dato que este debe ser
en este caso es un entero */