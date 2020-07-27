<?php
class Personas{
    protected $ci;
    protected $nombre;
    protected $paterno;
    protected $materno;
    protected $sexo;
    protected $fechaNac;    

    function __construct($c,$n,$p,$m,$s,$f){
        $this->ci = $c;
        $this->nombre = $n;
        $this->paterno = $p;
        $this->materno = $m;
        $this->sexo = $s;
        $this->fechaNac = $f;
    }
    public function __set($property, $value){
        if(property_exists($this,$property)){
            if(!strcmp($property,"ci")==0){
                $this->$property=$value;
            }
        }
    }

    public function __get($property){
        if(property_exists($this,$property)){
            return $this->$property;
        }else{
            if(strcmp($property,"nombreCompleto") == 0){
                return $this->nombre." -- ".$this->paterno." -- ".$this->materno;
            }else{
                return "Propiedad inexistente";
            }
        }
    }
    public function __toString(){
        return "Persona [ ci = ".$this->ci." ]"; 
    }
}
?>