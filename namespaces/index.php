<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 18/05/18
 * Time: 13:55
 */
    //Normalmente un constructor es usado para inicializar valores
    //y recibir parametros que le vamos a aplicar a nuestro objeto
    //El destructor se emplea cuando una variable ya no se usará,
    //Esto sucede cuando necesitemos liberar recursos del sistema.

    //Métodos Mágicos
    //A __construct() y __destruct() se les conoce como Métodos Mágicos.
    //Existen muchos otros como ellos.

//echo 'Esto es namespaces <br>';

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\Car;
use Vehicles\Truck;

echo 'Class Car: <br>';
$car = new Car('Andrade');
$car->move();
$car->setSolder('Luis');
/*
//Asignamos el valor 'Alexa' a $owner de esta forma porque es una variable pública
$car->owner = 'Alexa';
echo 'Owner: ' . $car->owner . '<br>'; */

echo 'Solder Car: ' . $car->getSolder() . '<br>';
echo 'Mechanic Car: ' . $car->getMechanic() . '<br>';
$car->move();


/**************************************************************************************************************/

echo '<br> Class Truck 1: <br>';
$truck = new Truck('Batea', 'Paxtian');
$truck->move();
//Asignamos los parametros enviados a los métodos
$truck->setSolder('Pedro');
$truck->setMechanic('Espinoza');

echo 'Solder Truck: ' . $truck->getSolder() . '<br>';
echo 'Mechanic Truck: ' . $truck->getMechanic() . '<br>';
echo 'Type Truck: ' . $truck->getType() . '<br>';
echo 'Thief Truck: ' . $truck->getThief() . '<br>';

echo '<br> Class Truck 2: <br>';
$truck2 = new Truck('Cerrada', 'Rubio');
$truck2->move();
$truck2->setSolder('Pablo');
$truck2->setMechanic('Portillo');


echo 'Solder Truck2: ' . $truck2->getSolder() . '<br>';
echo 'Mechanic Truck2: ' . $truck2->getMechanic() . '<br>';
echo 'Type Truck2: ' . $truck2->getType() . '<br>';
echo 'Thief Truck2: ' . $truck2->getThief() . '<br>';

//Número de camionetas totales
echo '<br> Total Trucks: ' . Truck::$count . '<br>';

