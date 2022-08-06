<?php

require 'helpers.php';

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2, true));

$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 12];

prettyPrintArray(array_combine($array1, $array2));

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array, fn($number) => $number % 2 == 0, ARRAY_FILTER_USE_BOTH);

$even = array_values($even);

prettyPrintArray($even);

$array3 = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 20, 'e' => 5];

$keys = array_keys($array3, 5, true);

prettyPrintArray($keys);

$array4 = [1, 2, 3];
$array5 = [4, 5, 6];
$array6 = [7, 8, 9];

$merged = array_merge($array4, $array5, $array6);

prettyPrintArray($merged);

$invoiceItems = [
    ['price' => 9.99, 'qty' => 3, 'desc' => 'item1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'item2'],
    ['price' => 149, 'qty' => 1, 'desc' => 'item3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'item4'],
    ['price' => 5.99, 'qty' => 4, 'desc' => 'item5'],
];

$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['price'] * $item['qty'], 500);

echo $total;

echo '<br>';

$array7 = ['a', 'b', 'C', 'd', 'bd', 'b'];
$key = array_search('b', $array7);

var_dump($key);

if ($key === false) {
    echo 'Letter not found';
}

if (in_array('a', $array7)) {
    echo 'Letter found';
}

prettyPrintArray(array_diff($array1, $array2, $array3));

prettyPrintArray(array_diff_assoc($array1, $array2, $array3));

asort($array3);
prettyPrintArray($array3);

ksort($array3);
prettyPrintArray($array3);

usort($array3, fn($a, $b) => $b <=> $a);
prettyPrintArray($array3);

$array8 = [1, 2, 3, 4];

list($a, $b, $c, $d) = $array8;
//[$a, $b, $c, $d] = $array8;
//[1 => $a, 0 => $b, 2 => $c] = $array8;
echo $a . ', ' . $b . ', ' . $c . '<br>';

