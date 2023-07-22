<?php
    function outputImage($path_to_directory)
    {
        if (!is_readable($path_to_directory)) {
            return false;
        }

        $names_image = scandir($path_to_directory);
        unset($names_image[0]);
        unset($names_image[1]);
        foreach ($names_image as $key => $value) {
            $names_image[$key] = $path_to_directory . '/' . $value;
        }
        return $names_image;

    }

    function moveImage($files)
    {

        move_uploaded_file(
            $files['tmp_name'],
            __DIR__ . '/images/' . $files['name']);

    }

    function recordLog($files, $user_name)
    {
        $fh = fopen('log.txt', 'a');
        fwrite($fh, 'user: ' . $user_name .
            '; time: ' . time() . '; name_image: ' . $files['name'] . "\n");
    }

