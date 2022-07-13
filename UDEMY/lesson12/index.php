<?php
    require 'point.php';

   echo Point::$num;

    $first = new Point;
    $first->x = 3;
    $first->y = 5;

    $second = $first;
    $second->x = 5;
    $second->y = 5;
    echo "x: {$first->x} <br> y: {$first->y}";
