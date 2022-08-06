<?php

$currentTime = time();

echo $currentTime . '<br>';

echo $currentTime + 5 * 24 * 60 * 60 . '</br>';

echo $currentTime - 24 * 60 * 60 . '</br>';

echo date('m/d/Y g:ia') . '<br />';
echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';
echo date('m/d/Y g:ia', $currentTime - 24 * 60 * 60) . '<br>';

echo date_default_timezone_get() . '</br>';
date_default_timezone_set('America/New_York');

echo date('m/d/Y g:ia') . '<br />';
echo date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';
echo date('m/d/Y g:ia', $currentTime - 24 * 60 * 60) . '<br>';

echo date_default_timezone_get() . '</br>';

echo date('m/d/Y g:ia', mktime(0, 0, 0, 4, 10, null));
echo '<br>';
echo date('m/d/Y g:ia', strtotime('2022-08-05 07:00:00'));
echo '<br>';
echo date('m/d/Y g:ia', strtotime('tomorrow'));
echo '<br>';
$date = date('m/d/Y g:ia', strtotime('second Friday of January'));
echo '<pre>';
print_r(date_parse($date));
echo '</pre>';


