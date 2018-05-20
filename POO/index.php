<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 18/05/18
 * Time: 13:55
 */

class Vehicle
{

    //Normalmente un constructor es usado para inicializar valores
    //y recibir parametros que le vamos a aplicar a nuestro objeto
    //El destructor se emplea cuando una variable ya no se usará,
    //Esto sucede cuando necesitemos liberar recursos del sistema.

    //Métodos Mágicos
    //A __construct() y __destruct() se les conoce como Métodos Mágicos.
    //Existen muchos otros como ellos.



    public $owner;
    protected $thief;

    private $mechanic;
    private $solder = 'Tadeo';

    //Constructor, estamos asignando a la propiedad Owner* el valor que llega a la funcion [$ownerName])
    public function __construct($mechanicName)
    {
        $this->mechanic = $mechanicName;
        echo 'Esto es el constructor <br>';
    }

    /*
    public function __destruct()
    {
        echo 'Esto es el destructor <br>';
    }*/

    public function move() {
        echo 'Moving: Vehicle <br>';
    }

    public function getSolder() {
        return $this->solder;
    }

    public function setSolder($solder) {
        $this->solder = $solder;
    }

    public function getMechanic() {
        return $this->mechanic;
    }

    public function setMechanic($mechanic) {
        $this->mechanic = $mechanic;
    }

    public function getThief() {
        return $this->thief;
    }

    public function setThief($thief) {
        $this->thief = $thief;
    }
}

class Car extends Vehicle {

    public function move() {
        echo 'Moving: Car <br>';
    }

}

class Truck extends Vehicle {

    private $type;

    public function __construct($mechanicName, $type, $thiefName)
    {
        //parent::__construct($mechanicName);
        //$this->mechanic = $mechanicName;
        $this->type = $type;
        $this->thief = $thiefName;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($typeName) {
        $this->type = $typeName;
    }

    public function move() {
        echo 'Moving: Truck' . '' . ' <br>';
    }
}



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




echo '<br> Class Truck: <br>';
$truck = new Truck('Paxtian', 'De Batea', 'Carlos');
$truck->move();
//Asignamos los parametros enviados a los métodos
$truck->setSolder('Pedro');
$truck->setMechanic('Jessica');

echo 'Solder Truck: ' . $truck->getSolder() . '<br>';
echo 'Mechanic Truck: ' . $truck->getMechanic() . '<br>';
echo 'Type Truck: ' . $truck->getType() . '<br>';
echo 'Thief Truck: ' . $truck->getThief() . '<br>';