<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 18/05/18
 * Time: 03:18
 */

$value = $_COOKIE['count'];
$value++;

setcookie('count', $value);

echo '<p> Adding 1 Cookie </p>';