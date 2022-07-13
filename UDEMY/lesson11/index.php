<?php
    require 'point.php';

    $point1 = new Point;
    $point1->x = 13;
    $point1->y = 15;
    echo $point1->x;

    $point2 = new Point;
    $point2->x = 20;
    $point2->y = 16;
    echo $point2->x;

    unset($point2);
    echo $point2->x;