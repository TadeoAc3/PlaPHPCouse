<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 18/05/18
 * Time: 03:22
 */

setcookie('count', null, time() - 1);

echo '<p> Destroying Cookie </p>';