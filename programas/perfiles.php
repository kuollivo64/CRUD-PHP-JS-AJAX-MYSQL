<?php
class Perfiles{
    private $tipo;
    private $descripcion;

    function __construct($t,$d){
        $this->tipo = $t;
        $this->descripcion = $d;
    }
    function getCodigo(){
        return $this->tipo;
    }
    function setCodigo($t){
        $this->tipo = $t;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function setDescripcion($d){
        $this->descripcion = $d;
    }
    function toString(){
        return "Perfiles[ tipo= ".$this->tipo.", descripcion= ".$this->descripcion."]";
    }
}
?>
