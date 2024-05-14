<?php
class PsajerosCapacidadesEspeciales extends Pasajero
{

    private $cantAsistencias; //numero ingresado por el usuario segun un menu

    //------------------------------------------------------ __construct
    public function __construct($nombre, $asiento, $tiket, $cantAsistencias)
    {
        parent::__construct($nombre, $asiento, $tiket);

        $this->cantAsistencias = $cantAsistencias;
    }

    //------------------------------------------------------ Get

    public function getCantAsistencias()
    {
        return $this->cantAsistencias;
    }

    //------------------------------------------------------ Set

    public function setCantAsistencias($cantAsistencias)
    {
        $this->cantAsistencias = $cantAsistencias;
    }

    //------------------------------------------------------ __toString

    public function __toString()
    {
        $salida = parent::__toString();

        $salida .= "\n Asistencias Solicitadas: " . $this->getCantAsistencias();

        return $salida;
    }
    public function darIncremento()
    {
        $opcion=$this->getCantAsistencias();

        switch ($opcion) {

            case 1:
                $salida = 0.15; // solo silla de ruedas
                break;
            case 2:
                $salida = 0.15; // solo Asistencia
                break;
            case 3:
                $salida = 0.15; // Asistencia y silla de ruedas
                break;
            case 4:
                $salida = 0.15; // Alimentacion
                break;
            case 5:
                $salida = 0.30; // Todas las asistencias
                break;
            default:
                echo "Dato invalido..\n";
                break;
        }
        return $salida;
    }
}
