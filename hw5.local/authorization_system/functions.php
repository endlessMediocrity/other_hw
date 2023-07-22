<?php
    function getUsersList() {
        $mas_with_users = null;
        $fh = file(__DIR__ . '/meta_data.txt',FILE_IGNORE_NEW_LINES);
        foreach ($fh as $value) {
            $mas_with_users[] = explode('; ', $value);
        }
        return $mas_with_users;
    }

    function isExistsUser($login) {
        foreach (getUsersList() as $value) {
            if ($login === $value[0]) {
                return $login;
            }
        }
        return false;
    }

    function isCheckPassword($login, $password) {
        foreach (getUsersList() as $value) {
            if (password_verify($password, $value[1]) && isExistsUser($login)) {
                return true;
            }
        }
        return false;
    }

    function getCurrentUser() {
        if (isExistsUser($_SESSION['user_name'])) {
            return $_SESSION['user_name'] ;
        }
        return null;
    }
