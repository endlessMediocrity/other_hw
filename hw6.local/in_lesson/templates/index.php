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
    <?php foreach ($book->getRecords() as $record) {?>
    <article style="border: 1px dotted darkgrey; margin-bottom: 20px">
        <?= $record->getMessage() ?>
    </article>
    <?php } ?>

    <hr>
    <form action="http://hw6.local/in_lesson/append.php" method="post">
        <label>
            <textarea name="message"></textarea>
        </label>
        <button type="submit">Отправить</button>
    </form>


</body>
</html>