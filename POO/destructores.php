<?php

/*Los destructores se ejecutan al momento de que  el objeto ha dejado de usarse
o cuando se invoca en automatico, no recibe parametros ni retorna información  */

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

    /*DESTRUCTOR */

    public function __destruct()
    {
        echo "Se ha eliminado el objeto";
    }
}
