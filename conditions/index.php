<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 15/05/18
 * Time: 17:10
 */

$color = 'green';
$number = 'two';

if ($color == 'black') {
    echo 'Color Is Black';
} elseif($color == 'White') {
    echo 'Color Is White';
} else {
    echo 'Color Is ' . $color;
}

switch ($number) {
    case 'one':
        echo 'El Número Es: ' . $number;
        break;
    case 'two':
        echo 'El Número Es: ' . $number;
        break;
    case 'three':
        echo 'El Número Es:' . $number;
        break;
    case 'four':
        echo 'El Número Es:' . $number;
        break;
    default:
        echo 'Ningun Color guardado';
        break;
}