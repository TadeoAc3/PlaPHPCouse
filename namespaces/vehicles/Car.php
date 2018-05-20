<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 19/05/18
 * Time: 08:31
 */

namespace Vehicles;

require_once 'VehicleBase.php';

class Car extends VehicleBase {

    public function move() {
        echo 'Moving: Car <br>';
    }

}

