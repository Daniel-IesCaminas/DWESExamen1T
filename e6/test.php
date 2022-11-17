<?php
require 'Empleado.php';
require 'Gerente.php';
require 'Programador.php';

$empleado = new Empleado('20000000-A', 25000);
$empleado-> __set(sueldo,20000);
echo $empleado;

$gerente = new Gerente('11111111-B');

echo $gerente ;
$gerente -> reunirse();

$programador = new Programador('55555555-T','JavaScript');

echo $programador ;
$programador -> programar();
 


?>