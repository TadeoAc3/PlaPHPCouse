<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 08/05/18
 * Time: 15:30
 */

/*
function hello ($name) {
    echo 'Hello ' . $name;
    echo '<br>';
}

hello('Carlos');
hello('Tadeo');
*/

function sum($a, $b) {
	return $a + $b;
}

$c = sum(1, 2);
var_dump ($c);

$c = sum(10, 20);
var_dump ($c);