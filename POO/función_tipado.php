<?php

declare(strict_types=1);

$sale = new Sale(10.5, date("Y-m-d")); /*defenimos un objeto ripo sale */
$sale->total = 10.5;
$sale->date = date("Y-m-d"); /*aqui estamos accediendo a las propiedades  */
$sale->createInvoice();
print_r($sale);
class Sale
{
    public int $total;
    public string $date;

    /*Estamos creando un objeto con una propiedad total y date */

    public function __construct(float $total, string $date)
    {
        $this->total = $total;
        $this->date = $date;
    }


    public function createInvoice(): string
    {
        return "Se  crea la factura";
    }
}
