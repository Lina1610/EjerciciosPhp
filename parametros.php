<?php
function coffe($tipo = "cafe")
{
    return "Hacer una taza de $tipo.\n";
}
echo coffe();
echo "<br>";
echo coffe(null);
echo "<br>";
echo coffe("Express");
/** Hacer una taza de cafe. Hacer una taza de . Hacer una taza de Express.
 */
