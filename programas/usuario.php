<?php
class Usuarios{
    private $usuario;
    private $contrasenia;
    private $email;
    private $Persona;
    private $tipoPerfil;
    
    function __construct($u,$c,$e,$p,$t){
        $this->usuario = $u;
        $this->contrasenia = $c;
        $this->email = $e;
        $this->Persona = $p;
        $this->tipoPerfil = $t;
    }

    public function __set($property,$value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
    }

    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }
    public function __toString(){
        return "Usuario[ usuarios =".$this->usuario.", CI=".$this->Persona."] Tipo ".$this->tipoPerfil;      
    }
}
?>