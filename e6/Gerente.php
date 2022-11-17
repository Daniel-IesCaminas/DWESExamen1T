<?php 

final class Gerente extends Empleado {


    function __construct($dni)
    {
        parent::__construct($dni,100000);

    }

    public function reunirse() {
        echo 'Estoy reunido <br>';
    }

    function __toString () {
        return '<br> Gerente: <br> Dni:'. $this->dni . '<br> Sueldo: ' . $this->sueldo . '<br>';
    }

}


?>