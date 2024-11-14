<?php
function dividir($numerador, $denominador)
{
    try {
        if ($denominador == 0) {
            throw new Exception("No se puede dividir por cero");
        }
        return $numerador / $denominador;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

$resultado = dividir(10, 0);
