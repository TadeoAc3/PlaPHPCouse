<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 07/05/18
 * Time: 03:10
 */

$array1 = [
    0 => 'a',
    1 => 'b',
    2 => 'c'
];

$array2 = [
    3 => 'd',
    4 => 'e',
    5 => 'f'
];

$array3 = [ 'a', 'b', 'c'];


//Operación de Unión
$resultado = $array1 + $array2;

$resultado2 = $array1 == $array3;
$resultado3 = $array1 === $array3;

var_dump($resultado);
var_dump($resultado2);
var_dump($resultado3);