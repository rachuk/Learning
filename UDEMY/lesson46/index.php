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



function invertCase($text)
{
    // BEGIN (write your solution here)
    $result = '';
    for ($i = 0; $i < mb_strlen($text); $i++) {
        $lowerStr = mb_strtolower($text);
        if ($text[$i] === $lowerStr[$i]) {
            $text[$i] = mb_strtoupper($lowerStr[$i]);
        }
        else $text[$i] = $lowerStr[$i];
        $result .= $text[$i];
    }
    return $result;
}

$str = 'dsjfывпаFDjs!!';
echo invertCase($str);

echo mktime(0, 0, 0, 1, 1, 2012);