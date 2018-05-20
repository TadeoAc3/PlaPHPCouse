<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 18/05/18
 * Time: 10:17
 */

//El scope de la las funciones aninimas no es global
//Si queremos usar una variable global dentro debemos
//usar la palabra reservada use()**

$var2 = 2;

$var = function () use ($var2) {
    echo 'This is a closure <br>' ;
    echo 'Value: ' . $var2 . '<br>';
};

$var();

//*******************************************************//

$numArray = [1,2,3,4,5];
$valX = 3;
$closure = function ($n) use ($valX) {
    return $n * $valX;
};

$valX = 4;
$result = array_map($closure, $numArray);

var_dump($result);