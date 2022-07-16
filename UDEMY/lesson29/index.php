<?php
    $arr = ['one' => '1', 'two' => 2];
    $arr['three'] = '3';
    $arr['three'] = '4';
    $arr['Three'] = '5';

    echo '<pre>';
    print_r($arr);
    echo '</pre>';