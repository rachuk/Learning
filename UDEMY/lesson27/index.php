<?php
    for ($i=0; $i<5; $i++) {
        echo "$i<br>";
    }

    echo '<br>';

    for ($i=5; $i>0; $i--) {
        echo "$i<br>";
    }

    echo '<br>';

    $flag = false;
    for ($i=2; $i < 100 ; $i++) {
        for ($j=2; $j < $i; $j++) {
            if (($i % $j) != 0) {
                continue;
            } else {
                $flag = true;
                break;
            }
        }
        if(!$flag) echo "$i ";
        $flag = false;
    }