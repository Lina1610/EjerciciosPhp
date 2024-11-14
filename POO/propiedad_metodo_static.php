<?php
/*Las propiedades y metodos estatiscos es algo que pertenece a la clase 
no se necesita crear un objeto para invocar*/


$$sale = new Sale(10.5, date("Y-m-d")); /*defenimos un objeto ripo sale */
$sale->total = 10.5;
$sale->date = date("Y-m-d"); /*aqui estamos accediendo a las propiedades  */
$sale->createInvoice();
print_r($sale);
class Sale
{
    public $total;
    public $date;
    public static $count;

    /*Estamos creando un objeto con una propiedad total y date */

    public function __construct($total, $date)
    {
        $this->total = $total;
        $this->date = $date;
        self::$count++;
    }
    public static function reset()
    {
        self::$count = 0;
        /**Esto hace que se convierte en 0 cuando se desee */
    }


    public function createInvoice()
    {
        echo "Se  crea la factura";
    }
}
