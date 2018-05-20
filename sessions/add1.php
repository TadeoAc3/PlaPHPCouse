<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 18/05/18
 * Time: 03:04
 */

session_start();

$_SESSION['count']++;

echo '<p> Session Incremento </p>';