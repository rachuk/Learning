<?php
    $first = ['1' => 'red', '2' => 'blue'];
    $second = ['1' => 'green', '4' => 'yellow'];
    $cov = $first + $second;
    $con = array_merge($first, $second);
    echo '<pre>';
    print_r($cov);
    print_r($con);
    echo '</pre>';

    if ($first == $second) {
        echo 'Arrays are equal';
    }
    else echo 'Arrays are not equal';

