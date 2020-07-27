<?php
include('personas.php');
class Cliente extends Personas
{
    protected $idCliente;
    protected $razonSocial;
    protected $nit;
    protected $telefono;
    protected $direccion;
    
    function __construct($vIdC,$vRas,$vNit,$vTel,$vDir,$vCi,$vNom,$vPat,$vMat,$vSex,$vFecN){
        parent::__construct($vCi,$vNom,$vPat,$vMat,$vSex,$vFecN);
        $this->idCliente = $vIdC;
        $this->razonSocial = $vRas;
        $this->nit = $vNit;
        $this->telefono = $vTel;
        $this->direccion = $vDir;
    }

    function __construct($vIdC,$vRas,$vNit,$vTel,$vDir,$objetoPersona){
        parent::__construct($objetoPersona->ci,$objetoPersona->nombre,$objetoPersona->paterno,$objetoPersona->materno,$objetoPersona->sexo,$objetoPersona->fechaNac);
        $this->idCliente = $vIdC;
        $this->razonSocial = $vRas;
        $this->nit = $vNit;
        $this->telefono = $vTel;
        $this->direccion = $vDir;
    }

    public function __set($property, $value){
        if(property_exists($this,$property)){
            if((!strcmp($property,"ci")==0) || (!strcmp($property,"idCliente")==0)) {
                $this->$property=$value;
            }
        }
    }

    function __toString(){
        return "Cliente[ id=".$this->idCliente.", razonSocial=".$this->razonSocial."]";
    }
}
?>