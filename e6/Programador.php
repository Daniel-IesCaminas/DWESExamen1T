<?php 

final class Programador extends Empleado {

    private $especialidad;

    function __construct($dni, $especialidad)
    {
        parent::__construct($dni,35000);
        $this -> especialidad = $especialidad;

    }

    public function programar() {
        echo 'Estoy programando <br>';
    }

    function __toString () {
        return '<br> Programador: <br> Dni:'. $this->dni . '<br> Sueldo: ' . $this->sueldo . '<br> Lenguaje Especializado: ' . $this->especialidad . '<br>';
    }

}


?>