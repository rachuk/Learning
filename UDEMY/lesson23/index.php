<?php
    $char = 'js';
    switch ($char) {
        case 'php': {
            echo 'PHP language';
            break;
        }
        case 'c#': {
            echo 'C# language';
            break;
        }
        case 'js': {
            echo 'JS language';
            break;
        }
        default: 'Unknown language';
    }

    echo '<br>';

    $number = 25;
    if ($number > 0 && $number <= 10) {
        echo "$number more than 0 and less than 10";
    } elseif ($number > 10 && $number <= 100) {
        echo "$number more than 10 and less than 100";
    } elseif ($number > 100 && $number <= 1000) {
        echo "$number more than 100 and less than 1000";
    } else {
        echo "$number more than 1000 or less than 0";
    }

    echo '<br>';

    switch (true) {
        case ($number > 0 && $number <= 10): {
             echo "$number more than 0 and less than 10";
             break;
        }
        case ($number > 10 && $number <= 100): {
            echo "$number more than 10 and less than 100";
            break;
        }
        case ($number > 100 && $number <= 1000): {
            echo "$number more than 100 and less than 1000";
            break;
        }
        default: echo "$number more than 1000 or less than 0";
            break;
    }