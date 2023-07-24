<?php

class GuestBook {

    protected $data;
    public function __construct($path) {
        if (is_readable($path)) {
            $this->data = file($path, FILE_IGNORE_NEW_LINES);
        }
    }

    public function getData() {
        return $this->data;
    }

    public function append($text) {
        $this->data[] = $text;
    }

    public function save() {
        $data = $this->data;
        $fh = fopen(__DIR__ . '/data.txt', 'w');
        foreach ($data as $value) {
            fwrite($fh, $value . "\n");
        }
        fclose($fh);
    }
}