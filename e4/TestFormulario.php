<?php
require 'Formulario.php';

$formulario = new Formulario('Daniel','Bayarri','11111111-Z','action','form.html');
echo $formulario -> getViewEmpty();


?>