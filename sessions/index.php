<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 18/05/18
 * Time: 03:02
 */

//Aquí usamos la super global $_SESSION

session_start();

$_SESSION['count'] = 0;

echo '<p> Sessions </p>';