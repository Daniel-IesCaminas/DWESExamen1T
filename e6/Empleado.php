<?php

class Empleado {

    private $dni;
    private $sueldo;

    function __construct($dni, $sueldo)
    {
        $this -> dni = $dni;
        $this -> sueldo = $sueldo;
    }

    function __get($name)
    {
        if(property_exists($this,$name)){
            return $this -> $name;
        }
    }

    function __set($name, $valor)
    {
        if(property_exists($this,$name)){
            $this -> $name = $valor;
        }
    }

    function __toString() {
        return 'Empleado: <br> Dni:'. $this->dni . '<br> Sueldo: ' . $this->sueldo . '<br>';
    }
}


?>