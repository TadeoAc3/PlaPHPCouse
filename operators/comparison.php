<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 07/05/18
 * Time: 02:49
 */

$v1 = 10;
$v2 = 10;
$v3 = '10';

$result = $v1 == $v2;
$result2 = $v1 == $v3;
$result3 = $v1 != $v2;

//Los operadores === y !== comparan que las variables tengan el mismo valor y mismo tipo.
$result3 = $v1 === $v3;
$result4 = $v1 !== $v3;

//El operador spaceship <=> nos da 3 resultados, 0 en caso de ser igual, -1 si el primero es menor y 1 si el primero es mayor.
$result5 = $v1 <=> $v2;

var_dump($result);
var_dump($result2);
var_dump($result3);
var_dump($result4);
var_dump($result5);


