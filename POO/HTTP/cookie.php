<?php

//Vamos a suponer que .
$nombre = 'Juan Pérez';
$id = '12345';

//Creamos nuestra cookie.
setcookie("nombre", $nombre, strtotime('+30 days'), "/", false, false);
setcookie("id", $id, strtotime('+30 days'), "/", false, false);

//Comprobamos si esta definida nuestra cookie y no NULL.
if (isset($_COOKIE['nombre']) && isset($_COOKIE['id'])) {
    //Obtenemos datos.  
    $nombreCookie = $_COOKIE['nombre'] ?: '';
    $idCookie = $_COOKIE['id'] ?: '';

    echo $idCookie . " " . $nombreCookie;
}
