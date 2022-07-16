<?php
    $i = 0;
    while ($i <= 5) {
        $i++;
        if ($i == 4) continue;
        if ($i > 5) break;
        echo "$i<br>";
    }

    echo '<br>';

    $j = 5;
    while (--$j) {
        echo "$j<br>";
    }
