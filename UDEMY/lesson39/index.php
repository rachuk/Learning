<?php
//    function sum() {
//        global $var;
//        $var = 2;
//        return $var;
//    }
//    $var = 6;
//    echo "<br> $var <br>";
//    echo sum();
//    echo "<br> $var <br>";

//    function sum() {
//        static $count = 0;
//        return ++$count;
//    }
//    echo sum() . "<br>";
//    echo sum() . "<br>";
//    echo sum() . "<br>";
//    echo sum() . "<br>";

//    function formatSize($bytes) {
//        $kbytes = $bytes / 1024;
//        $mbytes = $kbytes / 1024;
//        $gbytes = $mbytes / 1024;
//        return [$bytes, $kbytes, $mbytes, $gbytes];
//    }
//    echo "<pre>";
//    print_r(formatSize(434340390));
//    echo "</pre>";

//    function formatSize($bytes) {
//        $kbytes = $bytes / 1024;
//        $mbytes = $kbytes / 1024;
//        $gbytes = $mbytes / 1024;
//        return [$bytes, $kbytes, $mbytes, $gbytes];
//    }
//    list($bytes, $kbytes, $mbytes, $gbytes) = formatSize(434340390);
//    echo "$bytes<br>$kbytes<br>$mbytes<br>$gbytes";

    function formatSize($bytes) {
        $kbytes = $bytes / 1024;
        $mbytes = $kbytes / 1024;
        $gbytes = $mbytes / 1024;
        return [$bytes, $kbytes, $mbytes, $gbytes];
    }
    $arr = formatSize(434340390);
    $bytes = $arr[0];
    $kbytes = $arr[1];
    $mbytes = $arr[2];
    $gbytes = $arr[3];
    echo "$bytes<br>$kbytes<br>$mbytes<br>$gbytes";