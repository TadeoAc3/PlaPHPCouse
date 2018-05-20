<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 17/05/18
 * Time: 10:58
 */

echo '<p> Text from functions.php </p>';

function sum($a, $b) {
    $result = $a + $b;
    echo '<p> Result: ' . $result . '</p>';
}

sum(4, 5);