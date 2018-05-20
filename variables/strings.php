<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 07/05/18
 * Time: 01:37
 */

$intVar = 5;
$stringVar = 'Comillas simples no evalua $intVar';
$stringVar2 = "\n Comillas dobles evaluan $intVar";
$intStringVar = "Php permite concatenar strg e int " . $intVar;

echo $stringVar;
echo $stringVar2;
echo $intStringVar;

//Debilmente tipado
    //Se intentará hacer cambio de tipos de variables

