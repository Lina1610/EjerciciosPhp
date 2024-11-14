<?php
// Clase abstracta Animal
abstract class Animal
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public abstract function hacerSonido();
}

// Clase Perro que hereda de Animal
class Perro extends Animal
{
    public function hacerSonido()
    {
        echo "Guau!\n";
    }
}

// Clase Gato que hereda de Animal
class Gato extends Animal
{
    public function hacerSonido()
    {
        echo "Miau!\n";
    }
}

// Crear objetos y llamar al método hacerSonido
$perro = new Perro("Firulais");
$gato = new Gato("Michi");

$perro->hacerSonido();
$gato->hacerSonido();
