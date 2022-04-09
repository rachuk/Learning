<?php
//    $date = '01.01.2021';
//    echo 'день ' . substr($date, 0, 2) . '<br>';
//    echo 'месяц ' . substr($date, 3, 2) . '<br>';
//    echo 'год ' . substr($date, 6);


//    $str = 'PHP - интерпритируемый язык';
//    echo substr($str, strpos($str, 'интер'));

//    $str = 'PHP - [b]интерпритируемый[/b] язык, а это [b]жирный текст[/b]';
//    echo $str;
//    echo '<br>';
//    $str = str_replace('[b]', '<b>', $str);
//    $str = str_replace('[/b]', '</b>', $str);
//    echo $str;


//    $str = 'PHP - [b]интерпритируемый[/b] язык, а это [b]жирный текст[/b]';
//    echo $str;
//    echo '<br>';
//    $str = str_replace(['[b]','[/b]'], ['<b>', '</b>'], $str, $number);
//    echo $str;
//    echo "Осуществленно замен: $number";


    $str = '  Hello World!';
    echo strlen($str);
    echo '<br>';
    echo strlen(trim($str));
    echo '<br>';
    echo trim($str, " H!");




