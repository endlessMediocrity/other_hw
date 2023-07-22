<?php
    session_start();
    if (!isset($_SESSION['anti_albert_system'])) {
        header('Location: http:/../authorization_system/login.php');
        exit();
    }
    require 'functions_by_gallery.php';
    require '../authorization_system/functions.php';
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

    <?php
        if (isset($_FILES['new_img'])) {
            if (0 == $_FILES['new_img']['error']) {
                moveImage($_FILES['new_img']);
                recordLog($_FILES['new_img'], $_SESSION['user_name']);
            }
        }
        $mas_img = outputImage('images');
    ?>
        <?php foreach ($mas_img as $value): ?>
            <img src="<?= $value ?>" alt="low" width="400" height="300">
            <br>
            <br>
        <?php endforeach ?>

    <a href="index.php">На главную</a>
</body>
</html>