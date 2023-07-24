<?php

setcookie('Name', 123456);

var_dump($_COOKIE['Name']);

header('Api-key: https://google.com');

$_SESSION['NAME'] = '123123';

echo 'test';

session_start();
exit();