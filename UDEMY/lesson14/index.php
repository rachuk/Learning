<?php
    if (define('NUMBER', 4)) {
        echo "Constant is created and is equal to 4";
    }

    if (defined('NUMBER')) {
        echo 'Constant is already created';
    }

    echo '<br>';

    $num = mt_rand(1,10);
    $name = "VALUE($num)";
    define($name, $num);
    echo constant($name);

    echo '<br>';

    echo 'Name of file' . __FILE__ . '<br>';
    echo 'Line' . __LINE__ . '<br>';