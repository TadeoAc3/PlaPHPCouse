<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 08/05/18
 * Time: 02:38
 */

$v1 = 1;
$v2 = 0;

$v3 = 2;
$v4 = 3;

$result1 = $v1 == $v2;
echo 'Result 1: <br>';
var_dump($result1);
echo'<br>';

$result2 = $v3 == $v4;
echo 'Result 2: <br>';
var_dump($result2);

$result3 = $result1 && $result2;
echo'<br>';
echo'<br>';
echo 'Result 3: <br>';
var_dump($result3);

$result4 = $result1 || $result2;
echo'<br>';
echo'<br>';
echo 'Result 4: <br>';
var_dump($result4);