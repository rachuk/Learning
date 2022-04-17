<?php
//    echo '<pre>';
//    print_r($_GET['id']);
//    echo '<pre>';


//    echo "<a href='test.php?phrase=". urlencode("Привет, мир!") ."'>Ссылка</a>";


    $url = 'http://user:pass@www.site.ru/path/index.php?var=value#anch';
    echo '<pre>';
    echo parse_url($url, PHP_URL_SCHEME);
