<?php
    /*php.ini & configuration */

// error_reporting, error_log, display_errors

var_dump(ini_get('error_reporting'));
var_dump(E_ALL);

ini_set('error_reporting', E_ALL & ~E_WARNING);

$array = [1];

echo $array[3];

var_dump(ini_get('display_errors'));
ini_set('display_errors', 0);

var_dump(ini_get('max_execution_time'));
ini_set('max_execution_time', 3);

var_dump(ini_get('memory_limit'));

