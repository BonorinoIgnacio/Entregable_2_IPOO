<?php
class PasajeroVip extends Pasajero{

    private $numViajeroFrecuente;
    private $millas;

//------------------------------------------------------ __construct

    public function __construct($VFrecuente,$millas,$nombre,$asiento,$tiket){
     parent::__construct($nombre,$asiento,$tiket);
     
    $this->numViajeroFrecuente=$VFrecuente;
    $this->millas=$millas;
    }
//------------------------------------------------------ Get
    public function getNumViajeroFrecuente(){
        return $this->numViajeroFrecuente;
    }
    public function getMillas(){
        return $this->millas;
    }
//------------------------------------------------------ Set
    public function setNumViajeroFrecuente($num){
        $this->numViajeroFrecuente=$num;
    }
    public function setMillas($millas){
        $this->millas=$millas;
    }
//------------------------------------------------------ __toString
public function __toString()
{
    $salida=parent::__toString();
    $salida .= 
    "\n Millas: " . $this->getMillas()
    . "\n Numero de viajero Frecuente: " . $this->getNumViajeroFrecuente();
    return $salida;
}
public function darIncremento(){
    $salida = 0.35;
    if($this->getMillas() > 300){
        $salida = 0.30;
    }
    return $salida;
}

}