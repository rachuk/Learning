<?php
    $homepage = file_get_contents('text.txt');
    echo $homepage;
    $homepage .= "\n One more string";
    $filename = date("Y-m-d-H-i-s") . '.txt';
    file_put_contents($filename, $homepage);