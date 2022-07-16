<?php
    $x = -250;
    $x = $x < 0 ? -$x : $x;
    echo $x;

    $y = null;
    $y = $y ?? 1;
    echo $y;