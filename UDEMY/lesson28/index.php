<?php
    //$arr = array('Hello', 'world', '!');
    //$arr = ['Hello', 'world', '!'];
    $arr[10] = 'Hello';
    $arr[1] = 'world';
    $arr[7] = '!';

    $var = 'Hello world!';
    $arr = (array) $var;
    echo '<pre>';
    print_r($arr);
    echo '</pre>';