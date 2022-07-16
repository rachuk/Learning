<?php
    $arr = [1, 2, 3];
    list($a, $b, $c) = $arr;
    echo $a . '<br>';
    echo $b . '<br>';
    echo $c;

    echo '<br>';

    $x = 6;
    $y = 3;
    echo 'Before' . '<br>';
    echo 'x: ' . $x . '<br>';
    echo 'y: ' . $y . '<br>';

    list($y, $x) = [$x, $y];

    echo 'After' . '<br>';
    echo 'x: ' . $x . '<br>';
    echo 'y: ' . $y . '<br>';

