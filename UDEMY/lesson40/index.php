<?php
//    function recursiya($counter) {
//        if ($counter > 0) {
//            echo ($counter--) . '<br>';
//            recursiya($counter);
//        }
//        else return;
//    }
//    recursiya(8);


//    function outter() {
//        function inner() {
//            return "Hello World";
//        }
//    }
//    outter();
//    echo inner();


//    function first() {
//        return 'First function';
//    }
//    function second() {
//        return "Second function";
//    }
//    $newFunction = rand(0,1) ? 'first' : 'second';
//    echo $newFunction();


    class Point {
        public $x;
        public $y;
    }
    $fst = new Point;
    $fst->x = 12;
    $fst->y = 4;

    $snd = new Point;
    $snd->x = 34;
    $snd->y = 10;

    $thd = new Point;
    $thd->x = 25;
    $thd->y = 2;

    $arr = [$fst, $snd, $thd];

    usort($arr, function ($a, $b) {
        $dist_a = sqrt($a -> x ** 2 + $a -> y ** 2);
        $dist_b = sqrt($b -> x ** 2 + $b -> y ** 2);
        return $dist_a <=> $dist_b;
    });

    echo '<pre>';
    print_r($arr);
    echo '</pre>';