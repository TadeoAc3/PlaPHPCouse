<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 19/05/18
 * Time: 08:32
 */

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase {

    //Los valores static no emplean la palabra $this* sino self::*
    //Si cambiamos el valor de una var static, cambiará en todas las clases.
    //Se usa para hacer uso de la variable sin necesidad de crear instancia.
    private static $count = 0;
    private $type;
    private $mechanic;

    public function __construct($type, $thiefName)
    {
        //parent::__construct($mechanicName);
        $this->type = $type;
        $this->thief = $thiefName;
        self::$count++;
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

    public static function getTotal() {
        return self::$count;
    }

    public static function setTotal($countName) {
        self::$count = $countName;
    }


}
