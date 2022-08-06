<?php
//variable functions

    function sum(int|float ...$numbers) {
        return array_sum($numbers);
    }

    $x = 'sum';

// Anonymous function

    if (is_callable($x)) {
        echo $x(1, 2, 3, 4, 5);
    }
    else {
        echo 'Not callable';
    }


    echo '<br>';

    $y = 5;
    $sum =  function (int|float ...$numbers) use ($y): int|float {
        return array_sum($numbers);
    };
    echo $sum(1,2,3);
    echo '<br>' . $y;

//Callback functions

    $array = [1, 2, 3, 4];

    $array2 = array_map(function($element) {
        return $element * 2;
    }, $array);

    $x = function($element) {
        return $element * 2;
    };
    $array3 = array_map($x, $array);

    function foo($element) {
        return $element * 2;
    }
    $array4 = array_map('foo', $array);

    echo '<pre>';
    print_r($array);
    print_r($array2);
    print_r($array3);
    print_r($array4);
    echo '</pre>';

// Arrow functions

    $array5 = array_map(fn($number) => $number * $number, $array);
    echo '<pre>';
    print_r($array5);
    echo '</pre>';

