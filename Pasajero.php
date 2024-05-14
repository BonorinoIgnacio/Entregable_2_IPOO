<?php
class Pasajero{

    private $nombre;
    private $asiento;
    private $numTiket;
//------------------------------------------------------ __construct
    public function __construct ($nombre, $asiento, $tiket){

        $this->nombre=$nombre;
        $this->asiento=$asiento;
        $this->numTiket=$tiket;
    }
//------------------------------------------------------ Get
    public function getNombre(){
        return $this->nombre;
    }
    public function getAsiento(){
        return $this->asiento;
    }
    public function getTiket(){
        return $this->numTiket;
    }

//------------------------------------------------------ Set
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setAsiento($asiento){
        $this->asiento=$asiento;
    }
    public function SetTiket($tiket){
        $this->numTiket=$tiket;
        }

//------------------------------------------------------ __toString

    public function __toString()
    {
        $salida = 
        "\n Nombre: " . $this->getNombre()
        ."\n Asiento: " . $this->getAsiento()
        . "\n Numero de tiket: " . $this->getTiket();
        return $salida;
    }
    
    public function darIncremento(){
        $salida=0;
        return $salida;
    }

}
