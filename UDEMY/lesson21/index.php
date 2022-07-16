<?php
    $num = 11;
    if ($num > 0 && $num < 9) {
        echo "0 < {$num} < 9";
    }
    else {
        echo 'Number is not in needed interval';
    }

    echo '<br>';

    if ($num > 0 || $num < 9) {
        echo "$num fulfills the condition";
    }
    else {
        echo 'Number doesn\'t fulfill the condition';
    }