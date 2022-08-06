<?php
    $arr = [6 => 1, 2, 3];
    for ($i=0; $i<10; $i++) {
        if (isset($arr[$i])) {
            echo "Element \$arr[$i] exists <br>";
        }
        else {
            echo "Element \$arr[$i] doesn't exist <br>";
        }
    }

    if (is_array($arr)) {
        echo 'This is array';
    }
    else {
        echo 'This is not array';
    }

    echo '<br>';

    if (in_array(2, $arr, true)) {
        echo 'Value 2 is found in array';
    }
    else {
        echo 'Value 2 is not found in array';
    }

    echo '<br>';

    if (array_key_exists(5, $arr)) {
        echo 'Key 5 is found in array';
    }
    else {
        echo 'Key 5 is not found in array';
    }

    echo '<br>';

    echo array_search(2, $arr);

    unset($arr[6]);

    echo '<pre>';
    print_r($arr);
    echo '</pre>';

