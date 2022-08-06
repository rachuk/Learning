<?php

// Working with filesystem

//$dir = scandir(__DIR__);
//
//var_dump($dir);
//
//echo '<br>';

//mkdir('foo');
//rmdir('foo');

//mkdir('foo/bar', recursive: true);
//rmdir('foo/bar');
//rmdir('foo');

//if (file_exists('foo.txt')) {
//    echo filesize('foo.txt');
//
//    file_put_contents('foo.txt', 'Hello World');
//    clearstatcache();
//
//    echo filesize('foo.txt');
//}
//else {
//    echo 'File is not found';
//}


if (! file_exists('foo.txt')) {
    echo 'File is not found';
    return;
}
$file = fopen('foo.txt', 'r');

//while (($line = fgets($file)) !== false) {
//    echo $line . '<br />';
//}

while (($line = fgetcsv($file)) !== false) {
    print_r($line);
}

fclose($file);

$content = file_get_contents('foo.txt', offset: 3, length: 2);
echo $content;

//file_put_contents('bar.txt', 'Hello');
//file_put_contents('bar.txt', ' World', FILE_APPEND);
//
//unlink('bar.txt');

copy('foo.txt', 'bar.txt');
rename('foo.txt', 'bar.txt');
