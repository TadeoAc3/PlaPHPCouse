<?php
/**
 * Created by PhpStorm.
 * User: tadeoandrade
 * Date: 18/05/18
 * Time: 03:08
 */

session_start();

//El unset* solo debe contener los valores que queremos eliminar
unset($_SESSION['count']);

//Session_destroy* elimina la sesión y la cierra en ese momento
session_destroy();