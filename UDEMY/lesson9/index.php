<?php
    $str = '45.43';
    $number = $str + 12;
    echo $number;

    $float = 4.3;
    $num = (int)$float;
    echo $num;

    $numb = 24;
    $f = (float)($numb/2) - (int)($numb/2);
    if ($f) {
        echo "Number is odd";
    }
    else {
        echo "Number is even";
    }
