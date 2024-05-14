<?php
include_once "viaje.php";
include_once "Pasajero.php";
include_once "PasajeroVip.php";
include_once "PasajeroComun.php";
include_once "PasajerosCapacidadesEspeciales.php";

$arrayPasajeros = []; // inicializa el arreglo vacio (para evitar errores a la hora de pasarlo como parametro)

$objViaje = new viaje(488, "CABA", 250, $arrayPasajeros, 5000);


echo "Ingrese los datos del pasajero\n";
do {
    //------------------------------------------------- Datos del pasajero
    echo "\nNombre: ";
    $nombre = trim(fgets(STDIN));
    echo "\nNumero de aciento: ";
    $asiento = trim(fgets(STDIN));
    echo "\nNumero de tiket: ";
    $tiket = trim(fgets(STDIN));

    //------------------------------------------------- Tipo de pasaje
    echo "\nSacar pasaje comun(1), Vip(2), Con nececidad de asistencia(3)";
    $tipoDePasaje = trim(fgets(STDIN));

    switch ($tipoDePasaje) {
        case 1:
            $objPasajeroComun = new PasajeroComun($nombre, $asiento, $tiket);
            $objViaje->venderPasaje($objPasajeroComun);
            break;
        case 2:
            echo "Ingrese el numero de Viajero Frecuente: ";
            $VFrecuente = trim(fgets(STDIN));
            echo "Ingrese el numero de millas acumuladas: ";
            $millas = trim(fgets(STDIN));

            $objPasajeroVIP = new PasajeroVip($VFrecuente, $millas, $nombre, $asiento, $tiket);
            $objViaje->venderPasaje($objPasajeroVIP);
            break;
        case 3:
            echo "Que tipo de asistencia precisa?
            \n
            (1)solo silla de ruedas
            \n
            (2)solo Asistencia por movilidad
            \n
            (3)Asistencia  por movilidad y silla de ruedas
            \n
            (4) Alimentacion (Comida sin tacc, vegana, vegetariana, sin sal, etc)
            \n
            (5)Todas las asistencias
            \n";
            $cantAsistencias = trim(fgets(STDIN));

            $objPasajeroEspecial = new PsajerosCapacidadesEspeciales($nombre, $asiento, $tiket, $cantAsistencias);
            $objViaje->venderPasaje($objPasajeroEspecial);
            break;
        default:
            "Opcion Inexistente";
            break;
    }
    echo "\nDesea agregar otro pasajero? (s/n)";
    $agregarPasajero = trim(fgets(STDIN));
} while ($agregarPasajero == "s");
echo $objViaje;
