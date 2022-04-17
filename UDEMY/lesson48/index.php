<!doctype html>
<!--<form method="GET" action="">-->
<!--    <input type="text" name="first"><br>-->
<!--    <input type="text" name="second"><br>-->
<!--    <input type="submit" value="Отправить">-->
<!--</form>-->
<?php
//    if (!empty($_GET['first']) && !empty($_GET['second'])) {
//        echo '</pre>';
//        print_r($_GET);
//        echo '</pre>';
//    }
//    else {
//        exit('Текстовые поля  не заполненные');
//    }
//?>


<body>
<?php
    $errors = [];
    if (!empty($_POST)) {
        if (empty($_POST['first'])) {
            $errors[] = 'Текстовое поле не заполнено';
        }
        if (empty($errors)) {
            echo htmlspecialchars($_POST['first']);
            exit();
        }
    }
    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<span style='color:red'>$err</span><br>";
        }
    }
?>
<form method="POST">
    <input type="text" name="first" value="<?php htmlentities($_POST['first']); ?>"><br>
    <input type="submit" value="Отправить">
    </form>
</body>


