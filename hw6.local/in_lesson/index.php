<?php

require_once __DIR__ . '/Classes/GuestBook.php';

$book = new GuestBook(__DIR__ . '/data.txt');

include __DIR__ . '/templates/index.php';