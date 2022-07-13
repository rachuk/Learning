<?php
    echo 'File path' . __DIR__ . '<br>';
//    require_once ('..//lesson13/point.php');
    require_once __DIR__ . '/..//lesson13/point.php';
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

    class ConstClass {
        const NAME = "str";
    }

    if (defined('ConstClass::NAME')) {
        echo 'Constant name is defined';
    }
    else {
        echo 'Const name is not defined';
    }