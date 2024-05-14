<?php
class viaje
{
    private $codigo;
    private $destino;
    private $canMax;
    private $objPasajeros;  // Arreglo multidimencional de pasajeros
    private $costoViaje;

    public function __construct($cod, $destino, $cantMax, $arrayPasajeros, $costoViaje)
    {
        $this->codigo = $cod;
        $this->destino = $destino;
        $this->canMax = $cantMax;
        $this->objPasajeros = $arrayPasajeros;
        $this->costoViaje = $costoViaje;
    }
    //------------------------------Get
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function getCantMax()
    {
        return $this->canMax;
    }

    public function getPasajeros()
    {
        return $this->objPasajeros;
    }
    public function getCostoViaje()
    {
        return $this->costoViaje;
    }
    //------------------------------Set
    public function setCodigo($cod)
    {
        $this->codigo = $cod;
    }
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }
    public function setCantMax($cant)
    {
        $this->canMax = $cant;
    }
    public function setPasajeros($pasajeros)
    {
        $this->objPasajeros = $pasajeros;
    }
    public function setCostoViaje($costoViaje)
    {
        $this->costoViaje = $costoViaje;
    }
    //-------------------------------toString
    public function __toString()
    {
        $salida =
            "\n" .
            "Codigo de viaje: " . $this->getCodigo()
            . "\n" .
            "Destino: " . $this->getDestino()
            . "\n" .
            "Cantidad de pasajeros maxima: " . $this->getCantMax()
            . "\n" .
            "Costo del viaje: $" . $this->getCostoViaje()
            . "\n";
        return $salida;
    }

    public function hayPasajesDisponibles()
    {
        $salida = false;
        if (count($this->getPasajeros()) < $this->getCantMax()) {
            $salida = true;
        }
        return $salida;
    }

    public function venderPasaje($objPasajero)
    {
        $precioFinal = null;
        if ($this->hayPasajesDisponibles()) { // Verifica que queden asientos disponibles
            $arrayPasajeros = $this->getPasajeros();

            array_push($arrayPasajeros, $objPasajero); //Agrego el pasajero a la coleccion de pasajeros
            $this->setPasajeros($arrayPasajeros);
            $precioFinal = $this->getCostoViaje() + ($objPasajero->darIncremento() * $this->getCostoViaje()); //Calculo el precio segun el tipo de pasaje
            $this->setCostoViaje($precioFinal); // Seteo el precio
        } else {
            "no hay asientos disponibles en este viaje";
        }
        return $precioFinal;
    }
}
