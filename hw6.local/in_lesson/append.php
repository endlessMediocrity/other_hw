<?php

require_once __DIR__ . '/Classes/GuestBook.php';
require_once __DIR__ . '/Classes/GuestBookRecord.php';

$book = new GuestBook(__DIR__ . '/data.txt');
$record = new GuestBookRecord($_POST['message']);

$book->append($record);

$book->save();

header('Location: http://hw6.local/in_lesson/index.php');