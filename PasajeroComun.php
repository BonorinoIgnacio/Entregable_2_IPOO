<?php
class PasajeroComun extends Pasajero{

public function __construct($nombre, $asiento, $tiket){
    parent::__construct($nombre,$asiento,$tiket);
}

public function __toString()
{
    parent::__toString();
}
public function darIncremento(){
        
    $salida=0.10;
    return $salida;
}

}