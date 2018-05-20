<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 16/05/18
 * Time: 15:44
 */

include 'functions1.php';
//require 'functions.php';

//Cuando usamos *Include* y hay un error, el código no se detiene,
//Php te muestra que hay un error de que el archivo no se cargo.

//Cuando usamos *Require* el código si se detiene y PHP nos muestra,
//Que hubo un error fatal.

//Include_once se usa para verificar que un archivo php
//solo fue incluido una vez y ya.

echo '<p> Text from index.php </p>';

sum(10, 4);



