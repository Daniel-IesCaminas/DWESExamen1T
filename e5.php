<?php
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Mercedes",5,12),
    array("Saab",5,2),
    array("Saab",5,22),
    array("Land Rover",17,15)
);

function crearTabla ($array) {
    $table = '<table border="1"> <tr> <th> Marca </th> <th> Stock </th> <th> Ventas </th>';
    foreach ( $array as $c ) {
            if(strlen($c[0]) > 4 && $c[2] > 10){
                $table .= '<tr>';
                foreach ( $c as $valor ) {
                        $table .= '<td>'.$valor.'</td>';
                }
                $table .= '</tr>';
            }
    }
    $table .= '</table>';
    
    return $table;
}



echo crearTabla($cars);

?>