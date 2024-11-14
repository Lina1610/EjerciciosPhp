<?php

/*Crear clases y objetos 
una clase permite crear objetos y un objeto es una estructura de datos*/

/*Un objeto tiene propiedades y comportamientos*/

$sale = new Sale(10.5, "Y-m-d"); /*defenimos un objeto ripo sale */
$sale->total = 10.5;
$sale->date = date("Y-m-d"); /*aqui estamos accediendo a las propiedades  */
$sale->createInvoice();
print_r($sale);
class Sale
{
    public $total;
    public $date;

    /*Estamos creando un objeto con una propiedad total y date */

    public function createInvoice()
    {
        echo "Se  crea la factura";
    }
}

/*Metodo debe de estar dentro de una clase 
Metodo hay que crear un => objeto */