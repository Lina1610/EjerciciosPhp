<?php
function validarEdad($edad)
{
    try {
        if ($edad < 0) {
            throw new Exception("La edad no puede ser negativa");
        }
        return true;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

$edad = 5;
if (validarEdad($edad)) {
    echo "Edad válida";
}
