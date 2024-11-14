<?php

//Definimos una clase representando una persona 
class Person
{
    public $name;
    public $age;
    public $isStudent;



    function __construct($name, $age, $isStudent)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isStudent = $isStudent;
    }
}
//Creamos el objeto de la clase Persona
$person = new Person("Alice", 30, false);
echo $person->name . "\n";
var_dump($person); // Ver detalles del objeto
