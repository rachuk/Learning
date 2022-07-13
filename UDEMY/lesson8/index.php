<?php
    $user = "Ivan";
    if(isset($user)) {
        echo "Variable exists";
    }
    else {
        echo "Variable doesn't exist";
    }

    echo '<br>';

    $str = "";
    if (empty($str)) {
        echo "String is empty";
    }
    else {
        echo "String isn't empty";
    }

    echo '<br>';

    echo gettype("dsfsdjk");
    echo is_int(1.25);