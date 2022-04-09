<?php
//    $str = "text\nhello\nphp";
//    echo $str;
//    echo '<br><br>';
//    echo nl2br($str);
?>
<body>
    <form action="handler.php" method="post">
        Сообщение: <br>
        <textarea name="msg" cols="50" rows="5"></textarea><br>
        <input type="submit" value="Добавить">
    </form>
</body>

<?php
    $str = '<p>Обычный текст</p><br>
            <br>Жирный текст</br>';
    echo htmlspecialchars(strip_tags($str,'<p>'));




