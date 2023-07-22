<?php
    session_start();
    if (isset($_SESSION['anti_albert_system']) ) {
        header('Location: http://hw4.local/photo_gallery/index.php');
        exit();
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

<h3>Форма входа</h3>

<form action="../photo_gallery/index.php" method="post">
    <label>
        <p>Введите логин</p> <input type="text" name="login">
    </label>

    <label>
        <p>Введите пароль</p> <input type="password" name="password">
    </label>
    <br>
    <br>
    <input type="submit" value="Войти">
</form>

</body>
</html>