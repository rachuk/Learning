<?php

//    function myFunction(int $a, int $b) : int {
//        $sum = $a + $b;
//        return $sum;
//    }
//    echo myFunction(2.5, 3.1);


//    function sum($a) {
//        return $a + 10;
//    }
//    $b = 10;
//    echo sum($b);
//    echo '<br>';
//    echo $b;


//    function sum(%$a) {
//        $a = $a + 10;
//        return $a;
//    }
//    $b = 10;
//    echo sum($b);
//    echo '<br>';
//    echo $b;


//    function sum($b, $a = 10) {
//        return $a + $b;
//    }
//    echo sum(10, 12);

    function outArguments(...$items) {
        foreach ($items as $arg) {
            echo "$arg<br>";
        }
    }
    outArguments('PHP','JS','C++');