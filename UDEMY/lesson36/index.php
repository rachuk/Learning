<?php
    $array = ['green', 'violet', 'blue', 'yellow', 'brown'];
    echo $array[rand(0, count($array)-1)];

    echo '<br>';

    $length = rand(5,10);
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[$i] = rand(0,100);
    }
    sort($array);
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    $arr = file('month.txt');
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
