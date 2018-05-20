<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 19/05/18
 * Time: 08:31
 */

namespace Vehicles;

class VehicleBase
{
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