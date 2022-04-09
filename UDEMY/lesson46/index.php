<?php
    $arr = [
        'name' => 'Petr',
        'phones' => [
            '888', '777'
            ]
    ];
    $encodeArr = json_encode($arr);
    echo $encodeArr;
    echo '<br>';
    echo '<pre>';
    print_r(json_decode($encodeArr, true));
    echo '</pre>';

