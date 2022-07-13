<?php
    require 'point.php';

    $p1 = new Point;
    $p1->x = 3;
    $p1->y = 5;

    $p2 = clone $p1;
    $p2->x = 5;
    $p2->y = 5;
    echo "x: {$p1->x} <br> y: {$p2->y}";
    echo '<br>';
    echo "x: {$p2->x} <br> y: {$p2->y}";
    echo '<br>';
    $distance = sqrt(pow(($p1->x - $p2->x),2) + pow(($p1->y - $p2->y),2));
    echo $distance;