<?php
//    $message = 'Текстовое сообщение';
//    $mFu = function () use ($message) {
//      $message = 'New';
//      return $message;
//    };
//    echo $mFu();
//    echo '<br>';
//    echo $message;


//    function odd($number) {
//        if ($number % 2 == 0) {
//            return false;
//        }
//        else {
//            return true;
//        }
//    }
//    echo odd(25);


    function sum(...$items) {
        $sum = 0;
        for ($i = 0; $i < count($items); $i++) {
            $sum += $items[$i];
        }
        return $sum;
    }
    echo sum(45,5,6,4);