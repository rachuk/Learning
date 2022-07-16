<?php
    $number = ['1', '2', '3', 4, 'hello', true];
    for ($i=0; $i<count($number); $i++) {
        echo "$number[$i] <br>";
    }

    echo '<br>';

    $arr = [
        'car' => 'dodge',
        'plane' => 'il',
        'ship' => 'boat'
    ];
    foreach ($arr as $key => $value) {
        echo "$key : $value <br>";
    }

    echo '<br>';

    $transport = [
        'cars' => ['Honda', 'Dodge', 'Mazda'],
        'avia' => ['Boeing', 'Il'],
        'ships' => ['fregat', 'boat']
    ];

    foreach ($transport as $key => $array) {
        echo "$key <br>";
        foreach ($array as $value) {
            echo "<li>$value </li>";
        }
    }

    echo '<br>';

    foreach ($transport as $key => $array) {
        echo "$key <br>";
        for ($i=0; $i<count($array); $i++) {
            echo "<li>$array[$i]</li>";
        }
    }

