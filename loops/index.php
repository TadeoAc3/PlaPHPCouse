<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 15/05/18
 * Time: 23:17
 */

//while ($i <= 10) {
//    echo $i . '<br>';
//    $i++;
//}


//$i=1;
//do {
//    echo $i . '<br>';
//    $i++;
//} while ($i <= 10);


//for ($i = 0; $i <=10; $i++) {
//    echo $i . '<br>';
//}


$names = ['Tadeo', 'Anahi', 'Carlos', 'Marisol', 'Juan'];
foreach ($names as $key => $name) {
    echo $key .' - ' . $name . '<br>';
}