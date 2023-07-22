<?php
    session_start();
    require __DIR__ . '/../authorization_system/functions.php';
    require __DIR__ . '/functions_by_gallery.php';

    if (!isset($_SESSION['anti_albert_system'])) {
        if (!isCheckPassword($_POST['login'], $_POST['password'])) {
            header('Location: http:/../authorization_system/login.php');
            exit();
        } else {
            $_SESSION['user_name'] = $_POST['login'];
            $_SESSION['anti_albert_system'] = $_COOKIE['PHPSESSID'];
        }
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p>Приветствую пользователь <?= getCurrentUser() ?>! </p>

<form action="with_img.php" method="post" enctype="multipart/form-data">
    <label>
        Вставьте изображение(только файлы типа JPEG и PNG) <input type="file" name="new_img">
    </label>
    <br>
    <br>
    <button type="submit">Отправить</button>
    <a href="with_img.php">Показать галерею</a>
</form>


</body>
</html>