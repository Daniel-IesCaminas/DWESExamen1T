<?php

class Formulario {

    private $nombre;
    private $apellido;
    private $dni;
    private $accion;
    private $nombreFicheroFormulario;

    function __construct($nombre,$apellido,$dni,$accion, $fichero)
    {
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> dni = $dni;
        $this -> accion = $accion;
        $this -> nombreFicheroFormulario = $fichero;
    }

    //Getters
    public function getNombre ($nombre){
        return $this -> $nombre;
    }
    public function getApellido ($apellido){
        return $this -> $apellido;
    }
    public function getDni ($dni){
        return $this -> $dni;
    }
    public function getAccion ($accion){
        return $this -> $accion;
    }
    public function getFichero ($nombreFicheroFormulario){
        return $this -> $nombreFicheroFormulario;
    }
   
    //Setters

    public function setNombre ($valor) {
        $this -> $nombre = $valor;
    }
    public function setApellido ($valor) {
        $this -> $apellido = $valor;
    }
    public function setDni ($valor) {
        $this -> $dni = $valor;
    }
    public function setAccion ($valor) {
        $this -> $accion = $valor;
    }
    public function setFichero ($valor) {
        $this -> $nombreFicheroFormulario = $valor;
    }

    // functions

    public function getViewEmpty(){
        return file_get_contents($this->nombreFicheroFormulario);
    }





}


?>