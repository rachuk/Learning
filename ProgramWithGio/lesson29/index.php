<?php

//Error Handling

error_reporting(E_ALL & ~E_WARNING);

//trigger_error('Example error', E_USER_ERROR);
//trigger_error('Example error', E_USER_WARNING);
//echo 1;

function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null) {
    echo $type . ': ' . $msg . 'in ' . $file . 'on line' . $line;

    exit;
}

set_error_handler('errorHandler', E_ALL);

echo $x;

